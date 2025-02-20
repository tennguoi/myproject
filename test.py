import pymysql
import pandas as pd

# Kết nối MySQL
conn = pymysql.connect(
    host="localhost",
    user="root",
    password="minh152005minh",
    database="yte",
    charset="utf8mb4"
)
cursor = conn.cursor()

# Đọc file CSV
df = pd.read_csv("C:/xampp/htdocs/myproject/healthcare_dataset.csv")

# Nhập dữ liệu vào bảng BENH_NHAN
for index, row in df.iterrows():
    sql = """
    INSERT INTO BENH_NHAN (hoten, tuoi, gioitinh, diachi, ...)
    VALUES (%s, %s, %s, %s, ...);
    """
    cursor.execute(sql, tuple(row))

# Lưu thay đổi vào MySQL
conn.commit()
cursor.close()
conn.close()

print("Nhập CSV thành công!")
