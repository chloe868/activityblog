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
    <button type="button" class="btn btn-primary" @click="show">Add Post</button><br><br>
    <div v-if="posts.length <= 0" class="card" style="margin-top:5%">
        <div class="card-header"></div>
        <div class="card-body">
           <div class="title">
                <center>
                    No Post Yet<br>
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                </center>
            </div>
        </div>
    </div>
    <div v-if="posts.length > 0" class="row" style="margin-top:5%">
        <div class="column" v-for="(datum, index) in posts" :key="index">
            <div class="cards">
            <div class="card-header">User</div>
            <h2>{{datum.title}}</h2>
            <p>{{datum.content}}</p>
            </div>
        </div>
    </div>
</div>
</template>

<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  /* margin-left: 9px; */
  margin-top: 9px;
  float: left;
  width: 25%;
  padding: 20px;
  border: solid 1px 5px;
  border-spacing: 5px;
}

.cards{
    border: solid 1px;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* On screens that are 992px wide or less, go from four columns to two columns */
@media screen and (max-width: 992px) {
  .column {
    width: 50%;
  }
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
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
            posts: [
                {title: 'batig nawong', content: 'The quick brown fox jumps over the lazy dog'},
                {title: 'baki', content: 'The quick brown fox jumps over the lazy dog'},
                {title: 'kokak', content: 'The quick brown fox jumps over the lazy dog'},
                {title: 'jump', content: 'The quick brown fox jumps over the lazy dog'},
                {title: 'joy', content: 'The quick brown fox jumps over the lazy dog'},
                {title: 'happy', content: 'The quick brown fox jumps over the lazy dog'},
                {title: 'jolly', content: 'The quick brown fox jumps over the lazy dog'},
                {title: 'enjoy', content: 'The quick brown fox jumps over the lazy dog'}
            ],
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
