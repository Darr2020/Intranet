<template>
    <div>
       
    </div>
</template>

<script>
    export default {
        created: function(){
            this.getTasks();
        },
        data() {
            return{
                
                tasks: [], //array que trae todas las tareas
                task: {
                    name: '',
                    description: ''
                },
            }
        },        
        methods:{
            getTasks: function() {
                let url = '/tarea';

                axios.get(url)
                    .then(res => { 
                        this.tasks = res.data; 
                    }).catch(e =>{
                        console.log(e); 
                        })
        
            },
           /* createTask(){
                if(this.task.name.trim() === ''){
                    alert('Para poder crear una tarea debes colocarle un nombre');
                    return;
                }
                const dates = {
                    name: this.task.name,
                    description: this.task.description
                };
                
                this.task = {name: '', description: ''};  

                axios.post('/tareas', dates)
                    .then((res) => {
                        const tasksServidor = res.data;
                        this.tasks.push(tasksServidor);
                    })
                    .catch(function (error) {
                        alert(error);
                    });
            }   */
        }
    }
</script>