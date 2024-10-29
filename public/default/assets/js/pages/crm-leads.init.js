function formatDate(e){var e=new Date(e),t=""+["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"][e.getMonth()],a=""+e.getDate(),e=e.getFullYear();return t.length<2&&(t="0"+t),[(a=a.length<2?"0"+a:a)+" "+t,e].join(", ")}var checkAll=document.getElementById("checkAll"),perPage=(checkAll&&(checkAll.onclick=function(){for(var e=document.querySelectorAll('.form-check-all input[type="checkbox"]'),t=document.querySelectorAll('.form-check-all input[type="checkbox"]:checked').length,a=0;a<e.length;a++)e[a].checked=this.checked,e[a].checked?e[a].closest("tr").classList.add("table-active"):e[a].closest("tr").classList.remove("table-active");document.getElementById("remove-actions").style.display=0<t?"none":"block"}),8),editlist=!1,options={valueNames:["id","name","company_name","date","leads_score","phone","location","tags",{attr:"src",name:"image_src"}],page:perPage,pagination:!0,plugins:[ListPagination({left:2,right:2})]},leadsList=new List("leadsList",options).on("updated",function(e){0==e.matchingItems.length?document.getElementsByClassName("noresult")[0].style.display="block":document.getElementsByClassName("noresult")[0].style.display="none";var t=1==e.i,a=e.i>e.matchingItems.length-e.page;document.querySelector(".pagination-prev.disabled")&&document.querySelector(".pagination-prev.disabled").classList.remove("disabled"),document.querySelector(".pagination-next.disabled")&&document.querySelector(".pagination-next.disabled").classList.remove("disabled"),t&&document.querySelector(".pagination-prev").classList.add("disabled"),a&&document.querySelector(".pagination-next").classList.add("disabled"),e.matchingItems.length<=perPage?document.querySelector(".pagination-wrap").style.display="none":document.querySelector(".pagination-wrap").style.display="flex",0<e.matchingItems.length?document.getElementsByClassName("noresult")[0].style.display="none":document.getElementsByClassName("noresult")[0].style.display="block"});const xhttp=new XMLHttpRequest;xhttp.onload=function(){var e=JSON.parse(this.responseText);Array.from(e).forEach(function(e){var t=e.tags,a="";Array.from(t).forEach((e,t)=>{a+='<span class="badge bg-primary-subtle text-primary me-1">'+e+"</span>"}),leadsList.add({id:'<a href="javascript:void(0);" class="fw-medium link-primary">#VZ'+e.id+"</a>",image_src:e.image_src,name:e.name,company_name:e.company_name,date:formatDate(e.date),leads_score:e.leads_score,phone:e.phone,location:e.location,tags:a}),leadsList.sort("id",{order:"desc"}),refreshCallbacks()}),leadsList.remove("id",'<a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a>')},xhttp.open("GET","/default/assets/json/leads-list.json"),xhttp.send(),document.querySelector("#lead-image-input").addEventListener("change",function(){var e=document.querySelector("#lead-img"),t=document.querySelector("#lead-image-input").files[0],a=new FileReader;a.addEventListener("load",function(){e.src=a.result},!1),t&&a.readAsDataURL(t)});var isValue=(isCount=(new DOMParser).parseFromString(leadsList.items.slice(-1)[0]._values.id,"text/html")).body.firstElementChild.innerHTML,idField=document.getElementById("id-field"),leadNameField=document.getElementById("leadname-field"),leadImg=document.getElementById("lead-img"),company_nameField=document.getElementById("company_name-field"),dateField=document.getElementById("date-field"),leads_scoreField=document.getElementById("leads_score-field"),phoneField=document.getElementById("phone-field"),locationField=document.getElementById("location-field"),addBtn=document.getElementById("add-btn"),editBtn=document.getElementById("edit-btn"),removeBtns=document.getElementsByClassName("remove-item-btn"),editBtns=document.getElementsByClassName("edit-item-btn"),table=(refreshCallbacks(),document.getElementById("showModal").addEventListener("show.bs.modal",function(e){e.relatedTarget.classList.contains("edit-item-btn")?(document.getElementById("exampleModalLabel").innerHTML="Edit Lead",document.getElementById("showModal").querySelector(".modal-footer").style.display="block",document.getElementById("add-btn").innerHTML="Update"):e.relatedTarget.classList.contains("add-btn")?(document.getElementById("exampleModalLabel").innerHTML="Add Lead",document.getElementById("showModal").querySelector(".modal-footer").style.display="block",document.getElementById("add-btn").innerHTML="Add Lead"):(document.getElementById("exampleModalLabel").innerHTML="List Lead",document.getElementById("showModal").querySelector(".modal-footer").style.display="none")}),ischeckboxcheck(),document.getElementById("showModal").addEventListener("hidden.bs.modal",function(){clearFields()}),document.querySelector("#leadsList").addEventListener("click",function(){ischeckboxcheck()}),document.getElementById("customerTable")),tr=table.getElementsByTagName("tr"),trlist=table.querySelectorAll(".list tr"),count=11,tagInputField=new Choices("#taginput-choices",{removeItemButton:!0}),tagInputFieldValue=tagInputField.getValue(!0),tagHtmlValue="",forms=(Array.from(tagInputFieldValue).forEach((e,t)=>{tagHtmlValue+='<span class="badge bg-primary-subtle text-primary me-1">'+e+"</span>"}),document.querySelectorAll(".tablelist-form"));function ischeckboxcheck(){Array.from(document.getElementsByName("chk_child")).forEach(function(a){a.addEventListener("change",function(e){1==a.checked?e.target.closest("tr").classList.add("table-active"):e.target.closest("tr").classList.remove("table-active");var t=document.querySelectorAll('[name="chk_child"]:checked').length;e.target.closest("tr").classList.contains("table-active"),document.getElementById("remove-actions").style.display=0<t?"block":"none"})})}function refreshCallbacks(){removeBtns&&Array.from(removeBtns).forEach(function(e){e.addEventListener("click",function(e){e.target.closest("tr").children[1].innerText,itemId=e.target.closest("tr").children[1].innerText;e=leadsList.get({id:itemId});Array.from(e).forEach(function(e){var t=(deleteid=(new DOMParser).parseFromString(e._values.id,"text/html")).body.firstElementChild;deleteid.body.firstElementChild.innerHTML==itemId&&document.getElementById("delete-record").addEventListener("click",function(){leadsList.remove("id",t.outerHTML),document.getElementById("deleteRecord-close").click()})})})}),editBtns&&Array.from(editBtns).forEach(function(e){e.addEventListener("click",function(e){e.target.closest("tr").children[1].innerText,itemId=e.target.closest("tr").children[1].innerText;e=leadsList.get({id:itemId});Array.from(e).forEach(function(e){var t=(isid=(new DOMParser).parseFromString(e._values.id,"text/html")).body.firstElementChild.innerHTML,a=(new DOMParser).parseFromString(e._values.tags,"text/html").body.querySelectorAll("span.badge");t==itemId&&(editlist=!0,idField.value=t,leadImg.src=e._values.image_src,leadNameField.value=e._values.name,company_nameField.value=e._values.company_name,dateField.value=e._values.date,leads_scoreField.value=e._values.leads_score,phoneField.value=e._values.phone,a&&Array.from(a).forEach(e=>{tagInputField.setChoiceByValue(e.innerHTML)}),locationField.value=e._values.location,flatpickr("#date-field",{dateFormat:"d M, Y",defaultDate:e._values.date}))})})})}function clearFields(){leadImg.src="/default/assets/images/users/user-dummy-img.jpg",leadNameField.value="",company_nameField.value="",dateField.value="",leads_scoreField.value="",phoneField.value="",locationField.value="",tagInputField.removeActiveItems(),tagInputField.setChoiceByValue("0")}function deleteMultiple(){ids_array=[];var e,t=document.getElementsByName("chk_child");for(i=0;i<t.length;i++)1==t[i].checked&&(e=t[i].parentNode.parentNode.parentNode.querySelector("td a").innerHTML,ids_array.push(e));"undefined"!=typeof ids_array&&0<ids_array.length?Swal.fire({title:"Are you sure?",text:"You won't be able to revert this!",icon:"warning",showCancelButton:!0,confirmButtonClass:"btn btn-primary w-xs me-2 mt-2",cancelButtonClass:"btn btn-danger w-xs mt-2",confirmButtonText:"Yes, delete it!",buttonsStyling:!1,showCloseButton:!0}).then(function(e){if(e.value){for(i=0;i<ids_array.length;i++)leadsList.remove("id",`<a href="javascript:void(0);" class="fw-medium link-primary">${ids_array[i]}</a>`);document.getElementById("remove-actions").style.display="none",document.getElementById("checkAll").checked=!1,Swal.fire({title:"Deleted!",text:"Your data has been deleted.",icon:"success",confirmButtonClass:"btn btn-info w-xs mt-2",buttonsStyling:!1})}}):Swal.fire({title:"Please select at least one checkbox",confirmButtonClass:"btn btn-info",buttonsStyling:!1,showCloseButton:!0})}Array.prototype.slice.call(forms).forEach(function(l){l.addEventListener("submit",function(e){var t,a;l.checkValidity()?(e.preventDefault(),""===leadNameField.value||""===company_nameField.value||""===dateField.value||""===leads_scoreField.value||""===phoneField.value||""===locationField.value||editlist?""!==leadNameField.value&&""!==company_nameField.value&&""!==dateField.value&&""!==leads_scoreField.value&&""!==phoneField.value&&""!==locationField.value&&editlist&&(t=leadsList.get({id:idField.value}),Array.from(t).forEach(function(e){var t=(isid=(new DOMParser).parseFromString(e._values.id,"text/html")).body.firstElementChild.innerHTML,a=tagInputField.getValue(!0),l="";Array.from(a).forEach((e,t)=>{l+='<span class="badge bg-primary-subtle text-primary me-1">'+e+"</span>"}),t==itemId&&e.values({id:'<a href="javascript:void(0);" class="fw-medium link-primary">'+idField.value+"</a>",image_src:leadImg.src,name:leadNameField.value,company_name:company_nameField.value,date:formatDate(dateField.value),leads_score:leads_scoreField.value,phone:phoneField.value,tags:l,location:locationField.value})}),document.getElementById("close-modal").click(),clearFields(),Swal.fire({position:"center",icon:"success",title:"Lead updated Successfully!",showConfirmButton:!1,timer:2e3,showCloseButton:!0})):(t=tagInputField.getValue(!0),a="",Array.from(t).forEach((e,t)=>{a+='<span class="badge bg-primary-subtle text-primary me-1">'+e+"</span>"}),leadsList.add({id:'<a href="javascript:void(0);" class="fw-medium link-primary">#VZ'+count+"</a>",image_src:leadImg.src,name:leadNameField.value,company_name:company_nameField.value,date:formatDate(dateField.value),leads_score:leads_scoreField.value,phone:phoneField.value,location:locationField.value,tags:a}),leadsList.sort("id",{order:"desc"}),document.getElementById("close-modal").click(),clearFields(),refreshCallbacks(),count++,Swal.fire({position:"center",icon:"success",title:"Lead inserted successfully!",showConfirmButton:!1,timer:2e3,showCloseButton:!0}))):(e.preventDefault(),e.stopPropagation())},!1)}),document.querySelector(".pagination-next").addEventListener("click",function(){document.querySelector(".pagination.listjs-pagination")&&document.querySelector(".pagination.listjs-pagination").querySelector(".active")&&document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click()}),document.querySelector(".pagination-prev").addEventListener("click",function(){document.querySelector(".pagination.listjs-pagination")&&document.querySelector(".pagination.listjs-pagination").querySelector(".active")&&document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click()});
