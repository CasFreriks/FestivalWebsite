$(function () {
   const url = (window.location).href;
   const id = url.split('?').pop();
   console.log(id);
});