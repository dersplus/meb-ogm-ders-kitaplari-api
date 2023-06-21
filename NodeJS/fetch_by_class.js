const axios = require('axios').default;

let id = 1; // Sınıf ID

axios.get('https://api.dersplus.net/ogm/ders-kitaplari/fetch-by-class', {
  params: {
    id: id
  }
})
.then((response) => {
  console.log(response.data);
})
.catch((error) => {
  console.error(error);
});
