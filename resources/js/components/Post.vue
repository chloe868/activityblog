<template>
<div class="container">
    <div class="card" style="width: 25rem; height: 25rem;">
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
                <button type="submit" class="btn btn-danger">Cancel</button>
            </form>
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
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    float: right;
    margin-left: 3%;
}
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
    
</script>
