// JavaScript Document
$(document).ready(
    function() {
        $("#ano1").bind('keyup blur', function(e){
           e.preventDefault();
            
           if(this.value.match(/[a-zA-Z]/g))
           {
                this.value = this.value.replace(/[a-zA-Z]/g,'');
            }
        });
    });