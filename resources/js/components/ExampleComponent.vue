<template>
    <div>
        <div v-for="post in posts" class="row news-item" :key="post.id">
          <div class="col-xs-3 col-lg-2"><img
              :src="post.image"
              class="img-thumbnail img-responsive"></div>
          <div class="col-xs-9 col-lg-10">
            <h3><a :href="'http://127.0.0.1:8000/posts/'+post.id" target="_blank">{{post.title}}</a></h3>
            <p class="text-justify" v-html="post.text_1"></p>
            <div class="details">
              <div><img width="12" height="12" class="avatar"
                  :src="'https://vimg.ir/images/2b44928ae11fb9384c4cf38708677c4855e8e005c273381fb8092d36d31ff722.jpg'"> <a
                  :href="'https://vom.ir/voiceofmiyana'" target="_blank">صدای میانه</a></div>
              <div><span class="glyphicon glyphicon-calendar"></span> ۹۸/۸/۲۴</div>
              <div><span class="glyphicon glyphicon-time"></span> ۰۰:۵۶</div>
              <div><span class="glyphicon glyphicon-eye-open"></span> ۳۳۳ بازدید</div>
              <div><span class="glyphicon glyphicon-comment"></span> ۱۰ دیدگاه</div>
              <div><span class="glyphicon glyphicon-list-alt"></span> کد خبر: {{post.id}}</div>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                posts: []
            }
        },

        mounted() {
            axios.get('http://127.0.0.1:8000/api/posts').then((response) => {
                this.posts = response.data.data;
            })
        }
    }
</script>
