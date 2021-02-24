<template>

    <div id="parents">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary pull-right" @click="reload()">
                        Reload <i class="fa fa-repeat"></i>
                        </button>
                        <button class="btn btn-primary pull-right mr-2">
                        Create <i class="fa fa-plus-square"></i></button>                    
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-2">
                                    <strong> Search:</strong>
                                </div>
                                <div class="col-md-3">
                                    <select id="fields" v-model="queryField" class="form-control">
                                        <option value="name"> Name</option>
                                        <option value="email">Email</option>
                                        <option value="phone">Phone</option>
                                        <option value="total">Total</option>
                                        <option value="address">Address</option>
                                    </select>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" v-model="query" placeholder="Search">
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Total</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            <tr v-show="parents.length" v-for="(parent, index) in parents" :key="parent.id">
                                <td>{{index+1}}</td>
                                <td>{{parent.name}}</td>
                                <td>{{parent.email}}</td>
                                <td>{{parent.phone}}</td>
                                <td>{{parent.total}}</td>
                                <td>{{parent.address}}</td>
                                <td>
                                <button class="btn btn-info btn-sm" type="button">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-warning btn-sm" type="button">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" type="button">
                                    <i class="fa fa-trash-o"></i>                                
                                </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            // object parents
            parents:[],
        }
    }
}
</script>