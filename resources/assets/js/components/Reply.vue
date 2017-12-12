<template>
                <article>
		    <div class="row">
		        <div class="col-sm-8">
		            <h6><span v-text="createdAt"></span> by <a :href="'/users/'+this.reply.creator.username" v-text="this.reply.creator.name"></a></h6>
			</div>
			<div class="col-sm-4 text-right" style="display:inline-flex;">

			    <favorite :reply="this.reply" v-if="canFavorite"></favorite>
			    <button class="btn btn-default ml-2" type="button" @click="editing = true" v-if="canUpdate">Edit</button>
			    <button class="btn btn-danger ml-2" type="button" @click="destroy" v-if="canDelete">Delete</button>

			</div>
		    </div>
		    <div v-if="editing">
		        <div class="form-group">
		            <textarea class="form-control" rows="5" v-model="content"></textarea>
			</div>
			<button class="btn btn-primary" @click="update">Update</button>
			<button class="btn btn-link" @click="editing = false">Cancel</button>
		    </div>
		    <div v-else>
	                <p class="reply-content" v-text="content"></p>
		    </div>
                </article>
</template>

<script>
    import Favorite from './Favorite.vue';
    import moment from 'moment';

    export default {
        components: { Favorite },

        props: ['reply'],
	
        mounted() {
            console.log('Reply component mounted.')
        },

	computed: {
	    createdAt() {
	        return moment(this.reply.created_at).fromNow();
	    },
	    
	    canFavorite() {
	         return this.authorize(uid => uid > 0);
	    },
	    
	    canUpdate() {
	         return this.authorize(uid => this.reply.owner.id == uid);
	    },
	    
	    canDelete() {
	         return this.authorize(uid => this.reply.owner.id == uid);
	    }
	},
	
	data() {
	    return {
		editing: false,
		content: this.reply.content
	    }
	},

	methods: {
	    update() {
	        axios.patch('/replies/' + this.reply.id, {
		    content: this.content
		});

		this.editing = false;

		flash('Reply updated.');
	    },

	    destroy() {
	        axios.delete('/replies/' + this.reply.id);

		this.$emit('deleted', this.reply.id);
	    }
	}
    }
</script>

<style>

</style>