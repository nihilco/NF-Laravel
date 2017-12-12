<template>
    <div>
        <div v-for="(reply, index) in items">
	    <reply :reply="reply" @deleted="remove(index)" :key="reply.id"></reply>
	</div>

	<paginator :dataSet="this.dataSet" @changed="fetch"></paginator>

	<new-reply :resource="resource" @created="add"></new-reply>
    </div>
</template>

<script>
    import Reply from './Reply.vue';
    import NewReply from './NewReply.vue';
    import Collection from '../mixins/Collection.js';

    export default {
        components: { Reply, NewReply },

	mixins: [Collection],

	props: ['resource'],

        mounted() {
            console.log('Replies component mounted.')
        },

	data() {
	    return {
	    	dataSet: false
	    }
	},

	created() {
	    this.fetch();
	},

	methods: {
	    fetch(page) {
	        axios.get(this.url(page))
		    .then(this.refresh);
	    },

	    refresh(response) {
	        this.items = response.data.data;
		this.dataSet = response.data;

		window.scrollTo(0, 0);
	    },

	    url(page) {
	        if(!page) {
		    let query = location.search.match(/page=(\d+)/);

		    page = query ? query[1] : 1;
		}

	        return '/replies/list?resource_id=' + this.resource.id + '&resource_type=' + this.resource.class + '&page=' + page;
	    },

	    
	}
    }
</script>