//v1.0
//Copyright 2006 Adobe Systems, Inc. All rights reserved.
 function getCookie(Name){  //cookies∂¡»°
   var search = Name + "="
   if(document.cookie.length > 0){
      offset = document.cookie.indexOf(search)
      if(offset != -1){
         offset += search.length
         end = document.cookie.indexOf(";", offset)
         if(end == -1) end = document.cookie.length
         return unescape(document.cookie.substring(offset, end))
                       }
         else return ""
      }
                           }

function is_jf(){  //cookies∂¡»°
   var cookie_name="online"+self.location.hostname.toString().replace(/\./g,"")
   return getCookie(cookie_name)
                           }
				  

