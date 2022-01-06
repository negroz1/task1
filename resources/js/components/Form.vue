<template>
       <form action="./forms" method="get" @submit="addForm()">

              <div class="block-content block-content-full tab-content" >

                            <div class="tab-pane active" id="wizard-simple-step1" role="tabpanel">
                                <div class="form-group">
                                    <label for="wizard-simple-firstname">Title</label>
                                    <input class="form-control" type="text" v-model="title" />
                                </div>
                                <div class="form-group">
                                    <label for="wizard-simple-firstname">Type</label>
                                    <input class="form-control" type="text" v-model="type" />
                                </div>
                            </div>
                        </div>

                        <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                            <div class="row">
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn btn-primary" data-wizard="finish"><i class="fa fa-check mr-1"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </form>

</template>

<script>
import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
         return{
            title:"",
            type:"",
         }
        },
        methods:{
            addForm(){
              let data = new FormData();
            data.append('title' , this.title);
             data.append('type' , this.type);

             axios.post('./form/add' ,data);

            alert('Form Was Created');

            }
        }

    }
</script>
