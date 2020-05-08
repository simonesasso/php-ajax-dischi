$.ajax({
 url: "api.php",
 method: "GET",

 success: function (data,stato) {
   var source = document.getElementById("template-lista").innerHTML;
   var template = Handlebars.compile(source);
   for (var i = 0; i < data.length; i++) {



     var context = {
       immagine: data[i]["poster"],
       titolo: data[i]["title"],
       autore: data[i]["author"],
       genere: data[i]["genre"],
       anno: data[i]["year"],

     };


     var html = template(context);
     $("ul").append(html);
   }

   console.log(data);


},
error: function (richiesta,stato,errore) {
 alert("Si è verificato un errore", errore);
}
})
