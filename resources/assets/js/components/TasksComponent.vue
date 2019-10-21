<template>
    <div>

        
       @{{$data}}
    </div>
</template>

<script>
    export default {
        data() {
            return{
                tasks: [],
                task: {name: '', description: ''},
            }
        },
        created(){
            this.getTasks();
        },
        methods:{
            getTasks(){
                let url = '/tareas';

                axios.get(url)
                    .then(res => {
                        this.tasks = res.data;
                    }).catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            create(){
                if(this.task.name.trim() === ''){
                    alert('Para poder crear una tarea debes colocarle un nombre');
                    return;
                }
                const dates = {
                    name: this.task.name,
                    description: this.task.description
                };
                
                this.nota = {nombre: '', descripcion: ''};  

                axios.post('/tareas', dates)
                    .then(res => {
                      //  const tasksServidor = res.data;
                        this.tasks.push(res.data);
                    })
                    .catch(function (error) {
                        alert(error);
                    });
            }   
        }
    }
</script>