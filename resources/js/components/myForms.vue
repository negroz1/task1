<template>

  <table class="js-table-checkable table table-hover table-vcenter js-table-checkable-enabled">
                            <thead>
                                <tr>
                                                                      <th>id</th>

                                    <th>Name</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Type</th>
                                    <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="form in forms" :key="form.id">
                                
                                    <td>
                                        <p class="font-w600 mb-1">
                                            <a >{{form.id}}</a>
                                        </p>
                                       
                                    </td>
                                    <td>
                                        <p class="font-w600 mb-1">
                                            <a >{{form.title}}</a>
                                        </p>
                                       
                                    </td>
                                        <td>
                                        <p class="font-w600 mb-1">
                                            <a >{{form.type}}</a>
                                        </p>
                                       
                                    </td>
                                       <td>
                                        <p class="font-w600 mb-1">
                                            <a >{{form.updated_at}}</a>
                                        </p>
                                       
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>

</template>
<script>
import axios from 'axios'
export default {
    data(){
        return{
            forms:[]
        }
    },
      created() {
          axios.get('./get/forms')
          .then(response => this.forms = response.data);
}
}
</script>