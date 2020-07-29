<template>
<div class="container">
    <div class="blurred-background" v-if="hideShow">
        <div class="card alert-box">
            <div class="card-body">
                <h5 class="card-title">Create Post</h5>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" v-model="post.title">
                    </div>
                    <div class="form-group">
                        <label for="content">Post Content</label>
                        <textarea class="form-control" aria-label="With textarea" placeholder="Content" v-model="post.content"></textarea>
                    </div>
                    <div>
                        <label for="imageUpload">Upload Image</label>
                        <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" >
                        <label class="custom-file-label" for="customFile" >Choose file</label>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-danger" @click="hide">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" @click="show">Add Post</button><br>
    <div class="card" style="margin-top:5%">
        <div class="card-header">
            Warning
        </div>
        <div class="card-body">
           <div class="title">
                    No Posts Yet
                </div>
        </div>
    </div>
</div>
</template>

<style>
.form-control {
    display: block;
    height: calc(1.6em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.blurred-background {
    position: fixed;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    z-index: 1;
    top: 0;
    left: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: rgb(54, 54, 54, .7);
}
.blurred-background .card {
    margin-left: 33%;
}
.alert-box {
    background: white;
    display: inline-block;
    margin-top: 180px;
    font-weight: lighter;
    border-radius: 3px;
    padding: 20px;
    transition: .2s;
}
.title {
    font-size: 84px;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    float: right;
    margin-left: 3%;
}
</style>

<script>
    export default {
       data() {
        return {
            posts: [],
            post: {
                id: '',
                title: '',
                postcontent: ''
                },
            hideShow: false
            }
        },
        methods: {
            hide() {
                this.hideShow = false
            },
            show() { 
                this.hideShow = true
            }
        }
    }
    
</script>
