var todoList=[{id:"1",checkedElem:!1,todo:"Added Email Templates",assignedto:[{assigneeName:"Curtis Saenz",assigneeImg:"/default/assets/images/users/avatar-1.jpg"},{assigneeName:"John Robles",assigneeImg:"/default/assets/images/users/avatar-3.jpg"}],dueDate:"03 Apr, 2022",status:"Inprogress",priority:"High"},{id:"2",checkedElem:!1,todo:"Additional Mailbox",assignedto:[{assigneeName:"Virgie Price",assigneeImg:"/default/assets/images/users/avatar-5.jpg"},{assigneeName:"Diego Norris",assigneeImg:"/default/assets/images/users/avatar-9.jpg"},{assigneeName:"Anthony Mills",assigneeImg:"/default/assets/images/users/avatar-10.jpg"}],dueDate:"02 Apr, 2022",status:"Pending",priority:"Medium"},{id:"3",checkedElem:!0,todo:"Make a creating an account profile",assignedto:[{assigneeName:"Virgie Price",assigneeImg:"/default/assets/images/users/avatar-5.jpg"},{assigneeName:"Marian Angel",assigneeImg:"/default/assets/images/users/avatar-6.jpg"},{assigneeName:"Johnnie Walton",assigneeImg:"/default/assets/images/users/avatar-7.jpg"},{assigneeName:"Donna Weston",assigneeImg:"/default/assets/images/users/avatar-8.jpg"}],dueDate:"02 May, 2022",status:"Completed",priority:"Low"},{id:"4",checkedElem:!1,todo:"Added new tabs styles",assignedto:[{assigneeName:"James Forbes",assigneeImg:"/default/assets/images/users/avatar-2.jpg"}],dueDate:"01 May, 2022",status:"New",priority:"Low"},{id:"5",checkedElem:!1,todo:"Added bdge new style - gradient",assignedto:[{assigneeName:"John Robles",assigneeImg:"/default/assets/images/users/avatar-3.jpg"},{assigneeName:"Anthony Mills",assigneeImg:"/default/assets/images/users/avatar-10.jpg"},{assigneeName:"Diego Norris",assigneeImg:"/default/assets/images/users/avatar-9.jpg"}],dueDate:"01 May, 2022",status:"Inprogress",priority:"Medium"},{id:"6",checkedElem:!1,todo:"Added Back to Top button",assignedto:[{assigneeName:"Marian Angel",assigneeImg:"/default/assets/images/users/avatar-6.jpg"},{assigneeName:"Johnnie Walton",assigneeImg:"/default/assets/images/users/avatar-7.jpg"}],dueDate:"30 Apr, 2022",status:"Inprogress",priority:"High"},{id:"7",checkedElem:!0,todo:"Added File Manager Apps",assignedto:[{assigneeName:"John Robles",assigneeImg:"/default/assets/images/users/avatar-3.jpg"},{assigneeName:"Mary Gant",assigneeImg:"/default/assets/images/users/avatar-4.jpg"},{assigneeName:"Virgie Price",assigneeImg:"/default/assets/images/users/avatar-5.jpg"}],dueDate:"29 Apr, 2022",status:"Completed",priority:"Medium"},{id:"8",checkedElem:!1,todo:"Datatable with jQuery cdn",assignedto:[{assigneeName:"Marian Angel",assigneeImg:"/default/assets/images/users/avatar-6.jpg"},{assigneeName:"Johnnie Walton",assigneeImg:"/default/assets/images/users/avatar-7.jpg"},{assigneeName:"Donna Weston",assigneeImg:"/default/assets/images/users/avatar-8.jpg"}],dueDate:"28 Apr, 2022",status:"Pending",priority:"High"},{id:"9",checkedElem:!1,todo:"Profile Page Structure",assignedto:[{assigneeName:"Mary Gant",assigneeImg:"/default/assets/images/users/avatar-4.jpg"},{assigneeName:"Virgie Price",assigneeImg:"/default/assets/images/users/avatar-5.jpg"}],dueDate:"27 Apr, 2022",status:"New",priority:"Low"},{id:"10",checkedElem:!0,todo:"Make a creating an account profile",assignedto:[{assigneeName:"John Robles",assigneeImg:"/default/assets/images/users/avatar-3.jpg"}],dueDate:"26 Apr, 2022",status:"Completed",priority:"Medium"},{id:"11",checkedElem:!0,todo:"Change email option process",assignedto:[{assigneeName:"John Robles",assigneeImg:"/default/assets/images/users/avatar-3.jpg"},{assigneeName:"Anthony Mills",assigneeImg:"/default/assets/images/users/avatar-10.jpg"},{assigneeName:"Diego Norris",assigneeImg:"/default/assets/images/users/avatar-9.jpg"}],dueDate:"25 Apr, 2022",status:"Completed",priority:"High"},{id:"12",checkedElem:!1,todo:"Brand Logo design",assignedto:[{assigneeName:"James Forbes",assigneeImg:"/default/assets/images/users/avatar-2.jpg"},{assigneeName:"Anthony Mills",assigneeImg:"/default/assets/images/users/avatar-10.jpg"},{assigneeName:"Diego Norris",assigneeImg:"/default/assets/images/users/avatar-9.jpg"}],dueDate:"25 Apr, 2022",status:"New",priority:"Medium"},{id:"13",checkedElem:!1,todo:"Add Dynamic Contact List",assignedto:[{assigneeName:"Virgie Price",assigneeImg:"/default/assets/images/users/avatar-5.jpg"},{assigneeName:"Marian Angel",assigneeImg:"/default/assets/images/users/avatar-6.jpg"},{assigneeName:"Johnnie Walton",assigneeImg:"/default/assets/images/users/avatar-7.jpg"},{assigneeName:"Donna Weston",assigneeImg:"/default/assets/images/users/avatar-8.jpg"}],dueDate:"24 Apr, 2022",status:"Inprogress",priority:"Low"},{id:"14",checkedElem:!0,todo:"Additional Calendar",assignedto:[{assigneeName:"Virgie Price",assigneeImg:"/default/assets/images/users/avatar-5.jpg"},{assigneeName:"Diego Norris",assigneeImg:"/default/assets/images/users/avatar-9.jpg"},{assigneeName:"Anthony Mills",assigneeImg:"/default/assets/images/users/avatar-10.jpg"}],dueDate:"23 Apr, 2022",status:"Completed",priority:"Medium"},{id:"15",checkedElem:!1,todo:"Added Select2",assignedto:[{assigneeName:"Curtis Saenz",assigneeImg:"/default/assets/images/users/avatar-1.jpg"},{assigneeName:"John Robles",assigneeImg:"/default/assets/images/users/avatar-3.jpg"}],dueDate:"23 Apr, 2022",status:"Pending",priority:"High"}],createFolderForms=document.querySelectorAll(".createProject-form");Array.prototype.slice.call(createFolderForms).forEach(function(a){a.addEventListener("submit",function(e){var t,s;a.checkValidity()?(e.preventDefault(),t=document.getElementById("projectname-input").value,s=Math.floor(100*Math.random()),projectlisthtml='<li id="projectlist-'+s+'">        <a data-bs-toggle="collapse" href="#projectCollapse-'+s+'" class="nav-link fs-13">'+t+'</a>        <div class="collapse" id="projectCollapse-'+s+'">            <ul class="mb-0 sub-menu list-unstyled ps-3 vstack gap-2 mb-2">                <li>                    <a href="#!"><i class="ri-stop-mini-fill align-middle fs-15 text-danger"></i> v1.0.0</a>                </li>            </ul>        </div>    </li>',""!==t&&(document.getElementById("projectlist-data").insertAdjacentHTML("beforeend",projectlisthtml),document.getElementById("addProjectBtn-close").click())):(e.preventDefault(),e.stopPropagation()),a.classList.add("was-validated")},!1)});const projectModalEl=document.getElementById("createProjectModal");projectModalEl.addEventListener("show.bs.modal",e=>{document.getElementById("projectname-input").value="",document.querySelectorAll(".createProject-form").forEach(function(e){e.classList.remove("was-validated")})});var editList=!1,statusVal=(flatpickr("#task-duedate-input",{dateFormat:"d M, Y"}),Array.from(document.getElementsByClassName("createTask")).forEach(function(e){e.addEventListener("click",function(){document.getElementById("createTaskLabel").innerHTML="Create Task",document.getElementById("addNewTodo").innerHTML="Add Task",clearFields()})}),statusField=document.getElementById("task-status-input"),new Choices(statusField,{searchEnabled:!1})),priorityVal=(priorityField=document.getElementById("priority-field"),new Choices(priorityField,{searchEnabled:!1}));function fetchIdFromObj(e){return parseInt(e.id)}function findNextId(){var e,t;return 0===todoList.length?0:(e=fetchIdFromObj(todoList[todoList.length-1]))<=(t=fetchIdFromObj(todoList[0]))?t+1:e+1}function clearFields(){document.getElementById("task-title-input").value="",document.getElementById("task-duedate-input").value="",document.getElementById("total-assignee").innerHTML="0",Array.from(document.querySelectorAll(".select-element .dropdown-menu .dropdown-item.active")).forEach(function(e){e.classList.remove("active")}),Array.from(document.querySelectorAll("#assignee-member .avatar-group-item")).forEach(function(e){e.remove()}),document.getElementById("task-error-msg").style.display="none",statusVal.removeActiveItems(),statusVal.setChoiceByValue("New"),priorityVal.removeActiveItems(),priorityVal.setChoiceByValue("")}function sortElementsById(){load(todoList.sort(function(e,t){e=fetchIdFromObj(e),t=fetchIdFromObj(t);return t<e?-1:e<t?1:0}))}function sortElementsByName(){load(todoList.sort(function(e,t){e=e.todo.toLowerCase(),t=t.todo.toLowerCase();return e<t?-1:t<e?1:0}))}Array.from(document.getElementsByClassName("select-element")).forEach(function(e){Array.from(e.querySelectorAll(".dropdown-menu ul li a")).forEach(function(a){a.addEventListener("click",function(){a.classList.toggle("active");var e,t=document.querySelectorAll(".select-element .dropdown-menu .dropdown-item.active"),s=(document.getElementById("total-assignee").innerHTML=t.length,a.querySelector(".avatar-xxs img").getAttribute("src")),t=document.getElementById("assignee-member");a.classList.contains("active")?(e=a.querySelector(".flex-grow-1").innerHTML,folderlisthtml='<a href="javascript: void(0);" class="avatar-group-item mb-2" data-img="'+s+'"  data-bs-toggle="tooltip" data -bs-placement="top" title="'+e+'">                <img src="'+s+'" alt="" class="rounded-circle avatar-xs" />                </a>',t.insertAdjacentHTML("beforeend",folderlisthtml),tooltipElm()):Array.from(t.querySelectorAll(".avatar-group-item")).forEach(function(e){var t=e.getAttribute("data-img");s==t&&e.remove()})})})}),document.getElementById("creattask-form").addEventListener("submit",function(e){e.preventDefault();var t,s=document.getElementById("task-title-input").value,a=document.getElementById("task-duedate-input").value,i=statusVal.getValue(!0),n=priorityVal.getValue(!0),o=[],e=document.querySelectorAll(".select-element .dropdown-menu .dropdown-item.active"),r=document.getElementById("task-error-msg");return r.style.display="block",0==s.length?!(r.innerHTML="Please enter task name"):0==e.length?!(r.innerHTML="Please select team member"):""==i?!(r.innerHTML="Please select task status"):""==n?!(r.innerHTML="Please select task priority"):0==a.length?!(r.innerHTML="Please select due date"):(0<e.length&&Array.from(e).forEach(function(e){var t=e.querySelector(".avatar-xxs img").getAttribute("src"),e=e.querySelector(".flex-grow-1").innerHTML,s={};s.assigneeName=e,s.assigneeImg=t,o.push(s)}),""===s||""===i||""===n||editList?""!==s&&""!==i&&""!==n&&editList&&(t=0,t=document.getElementById("taskid-input").value,todoList=todoList.map(function(e){return e.id==t?("Completed"==statusVal.getValue(!0)?e.checkedElem=!0:e.checkedElem=!1,{id:document.getElementById("taskid-input").value,checkedElem:e.checkedElem,todo:s,assignedto:o,dueDate:a,status:i,priority:n}):e}),editList=!1,document.getElementById("createTaskBtn-close").click()):(r=findNextId(),todoList.push({id:r,checkedElem:!1,todo:s,assignedto:o,dueDate:a,status:i,priority:n}),sortElementsById(),document.getElementById("createTaskBtn-close").click()),load(todoList),!0)}),document.getElementById("createTask").addEventListener("hidden.bs.modal",e=>{clearFields()});var searchTaskList=document.getElementById("searchTaskList");function loadList(e){document.getElementById("elmLoader").innerHTML="",drawList(e)}searchTaskList.addEventListener("keyup",function(){var e=searchTaskList.value.toLowerCase();t=e;var t,e=todoList.filter(function(e){return-1!==e.todo.toLowerCase().indexOf(t.toLowerCase())});0==e.length?(document.getElementById("noresult").style.display="block",document.getElementById("todo-task").style.display="none"):(document.getElementById("noresult").style.display="none",document.getElementById("todo-task").style.display="block"),load(e)});var drake=dragula([document.getElementById("task-list")],{moves:function(e,t,s){return s.classList.contains("task-handle")}}),scroll=autoScroll([document.querySelector("#todo-content")],{margin:20,maxSpeed:100,scrollWhenOutside:!0,autoScroll:function(){return this.down&&drake.dragging}});function drawList(e){document.getElementById("task-list").innerHTML="",Array.from(e).forEach(function(e){var t=e.checkedElem?"checked":"",s=e.assignedto,a='<div class="avatar-group flex-nowrap">';Array.from(s.slice(0,3)).forEach(function(e){a+='<a href="javascript: void(0);" class="avatar-group-item" data-img="'+e.assigneeImg+'"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="'+e.assigneeName+'">                <img src="'+e.assigneeImg+'" alt="" class="rounded-circle avatar-xxs" />            </a>'}),3<s.length&&(s=s.length-3,a+='<a href="javascript: void(0);" class="avatar-group-item"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="'+s+' More">            <div class="avatar-xxs">            <div class="avatar-title rounded-circle">'+s+"+</div>            </div>        </a>"),a+="</div>",document.getElementById("task-list").innerHTML+='<tr>            <td>                <div class="d-flex align-items-start">                    <div class="flex-shrink-0 me-3">                        <div class="task-handle px-1 bg-light rounded">: :</div>                    </div>                    <div class="flex-grow-1">                        <div class="form-check">                            <input class="form-check-input" type="checkbox" value="'+e.id+'" id="todo'+e.id+'" '+t+'>                            <label class="form-check-label" for="todo'+e.id+'">'+e.todo+"</label>                        </div>                    </div>                </div>            </td>            <td>"+a+"</td>            <td>"+e.dueDate+"</td>            <td>"+isStatus(e.status)+"</td>            <td>"+isPriority(e.priority)+'</td>            <td>            <div class="hstack gap-2">                <button class="btn btn-sm btn-soft-danger remove-list" data-bs-toggle="modal" data-bs-target="#removeTaskItemModal" data-remove-id='+e.id+'><i class="ri-delete-bin-5-fill align-bottom"></i></button>                <button class="btn btn-sm btn-soft-info edit-list" data-bs-toggle="modal" data-bs-target="#createTask" data-edit-id='+e.id+'><i class="ri-pencil-fill align-bottom"></i></button>            </div>            </td>        </tr>',editTodoList(),removeSingleItem(),checkTaskStatus(),tooltipElm()})}var isShowMenu=!1,todoMenuSidebar=document.getElementsByClassName("file-manager-sidebar");function tooltipElm(){[...document.querySelectorAll('[data-bs-toggle="tooltip"]')].map(e=>new bootstrap.Tooltip(e))}function isStatus(e){switch(e){case"Pending":return'<span class="badge bg-warning-subtle text-warning text-uppercase">'+e+"</span>";case"Inprogress":return'<span class="badge bg-secondary-subtle text-secondary text-uppercase">'+e+"</span>";case"Completed":return'<span class="badge bg-success-subtle text-success text-uppercase">'+e+"</span>";case"New":return'<span class="badge bg-info-subtle text-info text-uppercase">'+e+"</span>"}}function isPriority(e){switch(e){case"High":return'<span class="badge bg-danger text-uppercase">'+e+"</span>";case"Low":return'<span class="badge bg-success text-uppercase">'+e+"</span>";case"Medium":return'<span class="badge bg-warning text-uppercase">'+e+"</span>"}}function checkTaskStatus(){Array.from(document.querySelectorAll("#task-list tr")).forEach(function(e){e.querySelector(".form-check .form-check-input").addEventListener("change",function(){var t=this.value;load(todoList=this.checked?todoList.map(function(e){return e.id==t&&(e.checkedElem=!0,e.status="Completed"),e}):todoList.map(function(e){return e.id==t&&(e.checkedElem=!1,e.status="Inprogress"),e}))})})}function editTodoList(){var s;Array.from(document.querySelectorAll(".edit-list")).forEach(function(t){t.addEventListener("click",function(e){s=t.getAttribute("data-edit-id"),todoList=todoList.map(function(e){var t;return e.id==s&&(editList=!0,document.getElementById("createTaskLabel").innerHTML="Edit Task",document.getElementById("addNewTodo").innerHTML="Save",document.getElementById("taskid-input").value=e.id,document.getElementById("task-title-input").value=e.todo,flatpickr("#task-duedate-input",{dateFormat:"d M, Y",defaultDate:e.dueDate}),t=(new DOMParser).parseFromString(e.status,"text/html").body,statusVal.setChoiceByValue(t.innerHTML),t=(new DOMParser).parseFromString(e.priority,"text/html").body,priorityVal.setChoiceByValue(t.innerHTML),Array.from(document.querySelectorAll(".select-element .dropdown-menu ul li a")).forEach(function(s){var a=s.querySelector(".flex-grow-1").innerHTML;e.assignedto.map(function(e){var t;return e.assigneeName==a&&(s.classList.add("active"),t=document.getElementById("assignee-member"),s.classList.contains("active"))&&(folderlisthtml='<a href="javascript: void(0);" class="avatar-group-item mb-2" data-img="'+e.assigneeImg+'"  data-bs-toggle="tooltip" data -bs-placement="top" data-bs-title="'+e.assigneeName+'">                                    <img src="'+e.assigneeImg+'" alt="" class="rounded-circle avatar-xs" />                                    </a>',t.insertAdjacentHTML("beforeend",folderlisthtml),tooltipElm()),s})}),t=document.querySelectorAll(".select-element .dropdown-menu .dropdown-item.active").length,document.getElementById("total-assignee").innerHTML=t),e})})})}function removeSingleItem(){var s;Array.from(document.querySelectorAll(".remove-list")).forEach(function(t){t.addEventListener("click",function(e){s=t.getAttribute("data-remove-id"),document.getElementById("remove-todoitem").addEventListener("click",function(){var t;t=s,load(todoList=todoList.filter(function(e){return e.id!=t})),document.getElementById("close-removetodomodal").click()})})})}Array.from(document.querySelectorAll(".file-menu-btn")).forEach(function(e){e.addEventListener("click",function(){Array.from(todoMenuSidebar).forEach(function(e){e.classList.add("menubar-show"),isShowMenu=!0})})}),window.addEventListener("click",function(e){document.querySelector(".file-manager-sidebar").classList.contains("menubar-show")&&(isShowMenu||document.querySelector(".file-manager-sidebar").classList.remove("menubar-show"),isShowMenu=!1)});var taskStatusInput=new Choices(document.getElementById("choices-select-status"),{searchEnabled:!1}),taskSortListInput=(taskStatusInput.passedElement.element.addEventListener("change",function(e){var t,s=e.detail.value;e.detail.value?0==(t=todoList.filter(e=>e.status==s)).length?(document.getElementById("noresult").style.display="block",document.getElementById("todo-task").style.display="none"):(document.getElementById("noresult").style.display="none",document.getElementById("todo-task").style.display="block"):t=todoList,load(t)},!1),new Choices(document.getElementById("choices-select-sortlist"),{searchEnabled:!1}));function load(e){loadList(e)}taskSortListInput.passedElement.element.addEventListener("change",function(e){e=e.detail.value;"By ID"==e?sortElementsById():"By Name"==e?sortElementsByName():load(todoList)},!1),window.onload=function(){sortElementsById()};
