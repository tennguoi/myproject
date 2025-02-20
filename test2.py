import chardet
import pandas as pd
# Phát hiện encoding của file
with open('healthcare_dataset.csv', 'rb') as file:
    raw_data = file.read()
    result = chardet.detect(raw_data)
    encoding = result['encoding']
df = pd.read_csv('healthcare_dataset.csv', encoding=encoding)
 
df.info()