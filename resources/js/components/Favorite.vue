
<!-- // resources/js/components/Favorite.vue -->
<template>  <!--markup that will be rendered when the component is used.  -->
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(art)"> <!-- if trigger unFavorite()-->
            <i  class="fa fa-heart"></i>       <!--conditional rendering to show the appropriate button/icon. -->
        </a>
        <a href="#" v-else @click.prevent="favorite(art)">  
            <i  class="fa fa-heart-o"></i>        <!--  Else the button/icon should be marked as unfavorite and on click of the button/icon should trigger favorite(). -->
        </a>
    </span>
</template>    

<script>
    export default {
        props: ['art', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(art) {
                axios.post('/favorite/'+art)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(art) {
                axios.post('/unfavorite/'+art)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>
<!-- In the script art (will be the ID of the Art)
 and favorited (will either be true or false depending on if the post has been favorited by the authenticated user).
 Also defined an isFavorited data which will be used for the conditional rendering from above.
 When the component is mounted, we set the value of isFavorited to the value of isFavorite computed property.
 That is, the isFavorite computed property will return the value of favorited prop which will either be true or false. 
 We use a computed property so as to reactively get the value of the favorited prop instead using the value of favorited prop that was passed directly.
 Lastly, we defined two methods: favorite() and unFavorite() which both accepts the post prop as arguments. Using Axios, we make a POST request to the routes we defined earlier. For the favorite(), once the POST request is successful, we set isFavorited to true and otherwise console log the errors. Same is applicable to the unFavorite() just that we set isFavorited to false. -->
