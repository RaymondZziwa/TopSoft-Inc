//getting authorization token
fetch("https://developers.rockethealth.africa/api/interview/api-token?api_user=1613782.")
    .then(res=> res.json())
    .then(data=>console.log(data))


//using the authorization token to access employee actions
var myHeaders = new Headers();
myHeaders.append("Authorization", "Bearer jfIrojQe6QuTI5emZLywF4jq");

var raw = "";

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("https://developers.rockethealth.africa/api/interview/employees-blog-actions?api user=1613782", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
