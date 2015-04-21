$(function() {
 
$("#contact").validate ({
rules:{
'name':{
required: true,
minlength: 3
},
 
'email':{
required: true,
email: true
},
'message':{
required: true,
minlength: 10
}
},
messages:{
'name':{
required: "This field is mandatory!",
minlength: "Please insert a name of at least 3 letters"
},
 
'email':{
required: "This field is mandatory!",
email: "Invalid email address"
},
'message':{
required: "This field is mandatory!",
minlength: "Please type at least 10 characters"
}
},
submitHandler : function(form) {
 
form.submit();
}
});
});