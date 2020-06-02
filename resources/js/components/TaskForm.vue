<template>
       <div>
          <h2>Job Adding</h2>
       </div>
</template>          
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <!--<div class="col-md-8 mt-4">
                <div class="card card-default">
                    <div class="card-header">Apply for a job</div>

                    <div class="card-body">
                       <form action="./api/task" method="POST" @submit.prevent="addTask()">
                    <div class="form-group">
                       <input type="text" name="title" placeholder="Aviation" v-model="title" class="form control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Apply for that job" class="btn btn-info">
                 </div>
            </form>
        </div>
     </div>
 </div>    
      </template>

<script>
    export default {
        
        data(){
            return {
                title:''
            }
        
        },
        mounted() {
            console.log('Component mounted.')
        },
    
    methods:{
      addTask(){
       axios.post('./api/task',{title:'Add something'});  
       alert('Adding task');
      }
    }

}

</script>
