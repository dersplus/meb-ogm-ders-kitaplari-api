import requests

# Konu özetlerinde arama yap
response = requests.get('https://api.dersplus.net/ogm/ders-kitaplari/search', params={'text': 'Arama parametreniz'})
print(response.json())

# Sınıf düzeylerini getir
response = requests.get('https://api.dersplus.net/ogm/ders-kitaplari/list-class')
print(response.json())

# Sınıfa göre konu özetlerini getir
response = requests.get('https://api.dersplus.net/ogm/ders-kitaplari/fetch-by-class', params={'id': 1})  # Buraya sınıf ID'nizi girin
print(response.json())
