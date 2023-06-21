const axios = require('axios').default;

axios.get('https://api.dersplus.net/ogm/ders-kitaplari/list-class')
.then((response) => {
  console.log(response.data);
})
.catch((error) => {
  console.error(error);
});
