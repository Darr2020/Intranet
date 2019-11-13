require('./bootstrap');

window.Vue = require('vue');

import moment from 'moment';

//Vue.component('tasks', require('./components/TasksComponent.vue').default);

const app = new Vue({
    el: '#app',
    created() {
      this.getTasks();
    },
    data: {
      tasks: [],
      pagination:{
        'total': 0,
        'current_page': 0,
        'per_page': 0,
        'last_page': 0,
        'from': 0,
        'to': 0
      },
      fillTask: { name: '', description: '' },
      name: '',
      description: '',
      errors: []     
    },
    computed: {
      isActived(){
        return this.pagination.current_page;
      },
      pagesNumber(){
        if(!this.pagination.to){
          return [];
        }

        let from = this.pagination.current_page - this.offset;
        if(from < 1){
          from = 1;
        }

        let to = from + (this.offset * 2)
        if(to >= this.pagination.last_page){
          to = this.pagination.last_page;
        }

        let pageArray = [];
        while(from <= to){
          pageArray.push(from);
          from++;
        }
        
        return pageArray;
      }
    },
    methods:{
      getTasks(page){
        let url = '/tarea?page=' + page;
        axios.get(url).then(res => {
          this.tasks = res.data.tasks.data;
          this.pagination = res.data.pagination
        });
      },
      postTasks(id){
        
      },
      deleteTask(task){
        let url = 'tarea/' + task.id;
        axios.delete(url).then(res => {
          let text = this.tasks.find(t => t.id === task.id);
          let index = this.tasks.indexOf(text);
          this.tasks.splice(index, 1);
          toastr.warning('eliminado');
        });
      },
     editTask(task){
        this.fillTask.id = task.id;
        this.fillTask.name = task.name;
        this.fillTask.description = task.description;
        $('#edit').modal('show')
      },
      updateTask(id){
        let url = 'tarea/' + id;
        axios.post(url, this.fillTask)
          .then(res => {
            this.getTasks();
            this.fillTask =  { name: '', description: '' };
            this.errors = [];
            $('#edit').modal('hide');
            toastr.warning('actualizado');
          }).catch(error => {
            this.errors = error.res.data;
        })
      },
      createTask(){
        let url = '/tarea';

        axios.post(url, {
          name: this.name,
          description: this.description
        }).then(res => {
            this.getTasks();
            this.name = ''; 
            this.description = '';
            this.errors = [];
            $('#create').modal('hide');
            toastr.success('creado');
          }).catch(error => {
              this.errors = error.res.data;
          })
      },
      changePage(page){
        this.pagination.current_page = page;
        this.getTasks(page);
      }
    }
});

Vue.filter('taskCreatedAt', function (created){
    return moment(created).format('L'); 
});

const inputs = document.querySelectorAll('.inputModal');
        
function focusFunc(){
    let parent = this.parentNode.parentNode;
    parent.classList.add('focus');
}

function blurFunc(){
  let parent = this.parentNode.parentNode;
  if(this.value == ""){
    parent.classList.remove('focus');
  }            
}

inputs.forEach(input => {
  input.addEventListener('focus', focusFunc);
  input.addEventListener('blur', blurFunc);
});

/*=====  404 Ghost  =====*/
var balls =document.getElementsByClassName("ball");

document.onmousemove = function(){
  //event.clientX => get the horizontal coordinate of the mouse
  var x = event.clientX * 100 / window.innerWidth + "%";

  //event.clientY => get the vertical coordinate of the mouse
  var y = event.clientY * 100 / window.innerHeight  + "%";

  for (var i = 0; i < 2; i++){
    balls[i].style.left = x;
    balls[i].style.top = y;
    balls[i].style.transform = "translate(-"+x+",-"+y+")";
  }
}

/*=====  SEARCH BUTTTON  =====*/
const input = document.getElementById("search-input");
const searchBtn = document.getElementById("search-btn");

const expand = ()=>{
  searchBtn.classList.toggle("close");
  input.classList.toggle("square");
};

if (searchBtn) {
	searchBtn.addEventListener("click", expand);	
}

/*=====  RELOJ  =====*/
$(document).ready(function() {

	var newDate = new Date();

	setInterval( function() {
		let seconds = new Date().getSeconds();
		$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
	setInterval( function() {
		let minutes = new Date().getMinutes();
		$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
	setInterval( function() {
		let hours = new Date().getHours();
		$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
	}, 1000);  
});

$(document).ready(function() {
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){
      $('#scrollUp').slideDown(300);
    }else{
      $('#scrollUp').slideUp(300);
    }
  });
  $('#scrollUp').on('click', function(){
    $('body, html').animate({
      scrollTop: 0
    }, 700);
    return false;
  });
});

