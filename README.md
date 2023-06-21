
# OGM MEB Ortaöğretim Ders Kitapları PDF API

Dersplus API'nı kullanarak https://ogmmateryal.eba.gov.tr/ adresinde yayınlanan PDF ders kitaplarını PHP, NodeJs ve Python örneklerini kullanarak çekebilirsiniz. API kullanımı aşağıda verilmiştir.


## API Kullanımı

#### Ders kitaplarında arama yap

```http
  GET https://api.dersplus.net/ogm/ders-kitaplari/search
```

| Parametre | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `text` | `string` | **Gerekli**. Arama parametreniz. |

#### Sınıf düzeylerini getir

```http
  GET https://api.dersplus.net/ogm/ders-kitaplari/list-class
```
| Parametre almaz |
| :-------- |

#### Sınıfa göre ders kitaplarını getir

```http
  GET https://api.dersplus.net/ogm/ders-kitaplari/fetch-by-class
```

| Parametre | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `id` | `int` | **Gerekli**. Bir üsteki URL'den aldığınız sınıfın ID'si. |

