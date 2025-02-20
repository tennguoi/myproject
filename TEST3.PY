import cv2
import numpy as np
from skimage.feature import hog
from sklearn.svm import SVC

def sliding_window_face_detection(image_path):
    # Đọc ảnh
    image = cv2.imread(image_path)
    gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    
    # Khởi tạo bộ phát hiện khuôn mặt cascade
    face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')
    
    # Phát hiện khuôn mặt sử dụng sliding window
    faces = face_cascade.detectMultiScale(
        gray,
        scaleFactor=1.1,
        minNeighbors=5,
        minSize=(30, 30)
    )
    
    # Vẽ hình chữ nhật xung quanh khuôn mặt
    for (x, y, w, h) in faces:
        cv2.rectangle(image, (x, y), (x+w, y+h), (255, 0, 0), 2)
    
    return image

def extract_hog_features(image, faces):
    features = []
    for (x, y, w, h) in faces:
        face_roi = image[y:y+h, x:x+w]
        # Resize face ROI to fixed size
        face_roi = cv2.resize(face_roi, (64, 64))
        # Tính toán HOG features
        hog_features = hog(face_roi,
                         orientations=9,
                         pixels_per_cell=(8, 8),
                         cells_per_block=(2, 2),
                         visualize=False)
        features.append(hog_features)
    return np.array(features)

def feature_based_face_detection(image_path):
    # Đọc ảnh
    image = cv2.imread(image_path)
    gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    
    # Sử dụng Haar cascade để tìm vị trí khuôn mặt ban đầu
    face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')
    faces = face_cascade.detectMultiScale(gray, 1.1, 5)
    
    # Trích xuất HOG features cho mỗi khuôn mặt
    if len(faces) > 0:
        features = extract_hog_features(gray, faces)
        
        # Training một SVM đơn giản (trong thực tế bạn cần dataset để training)
        svm = SVC(kernel='linear')
        # Giả lập nhãn để demo (1 = face)
        labels = np.array([0, 1] * (len(features) // 2))
        svm.fit(features, labels)
        
        # Vẽ kết quả
        for (x, y, w, h) in faces:
            cv2.rectangle(image, (x, y), (x+w, y+h), (0, 255, 0), 2)
        
        # Tính và hiển thị HOG visualization cho khuôn mặt đầu tiên
        face_roi = gray[faces[0][1]:faces[0][1]+faces[0][3], 
                       faces[0][0]:faces[0][0]+faces[0][2]]
        face_roi = cv2.resize(face_roi, (64, 64))
        _, hog_image = hog(face_roi,
                          orientations=9,
                          pixels_per_cell=(8, 8),
                          cells_per_block=(2, 2),
                          visualize=True)
    else:
        hog_image = np.zeros_like(gray)
    
    return image, hog_image

def main():
    image_path = 'public/Img/IMG_4956.jpeg'  # Thay đổi đường dẫn ảnh của bạn
    
    # Phương pháp 1: Sliding Window
    result_sliding = sliding_window_face_detection(image_path)
    
    # Phương pháp 2: Feature-based với HOG + SVM
    result_feature, hog_image = feature_based_face_detection(image_path)
    
    # Hiển thị kết quả
    cv2.imshow('Sliding Window Detection', result_sliding)
    cv2.imshow('Feature-based Detection', result_feature)
    cv2.imshow('HOG Features', hog_image)
    
    cv2.waitKey(0)
    cv2.destroyAllWindows()

if __name__ == "__main__":
    main()