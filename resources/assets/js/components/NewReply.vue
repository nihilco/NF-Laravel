<template>
    <div class="row">
        <div class="col-sm-12">

	    <div v-if="canReply">

                <div class="form-group">
	            <label for="content">Leave a reply</label>
	            <textarea class="form-control" id="content" name="content" aria-describedby="contentHelp" rows="5" v-model="content"></textarea>
	            <small id="contentHelp" class="invalid-feedback">Error</small>
	        </div>

   	        <button type="button" class="btn btn-primary" @click="addReply">Reply</button>

	    </div>

	    <div v-else>
	        <p><a href="/login">Login</a> to participate in the discussion.</p>
	    </div>

	</div>
    </div>
</template>

<script>
    export default {
        props: ['resource'],

        mounted() {
            console.log('NewReply component mounted.')
        },

	data() {
	    return {
		content: ''
	    }
	},

	computed: {
	    canReply() {
	         return this.authorize(uid => uid > 0);
	    }
	},

	methods: {
	    addReply() {
	        axios.post('/replies', {
		    content: this.content,
		    resource_id: this.resource.id,
		    resource_type: this.resource.class,
		}).then(response => {
		    this.content = '';
		    this.$emit('created', response.data);
		});
	    }
	}
    }
</script>