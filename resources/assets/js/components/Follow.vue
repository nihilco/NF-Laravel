<template>
    <button :class="classes" type="button" @click="toggle" v-text="buttonText" v-if="canFollow"></button>
</template>

<script>
    export default {
        props: ['resource'],
    
        mounted() {
	    console.log('Follow component mounted.')
	},

	computed: {
	    classes() {
	        return ['btn', this.isFollowing ? 'btn-secondary' : 'btn-primary'];
	    },

	    buttonText() {
	        return this.isFollowing ? 'Unfollow' : 'Follow';
	    },

	    canFollow() {
	         return this.authorize(uid => uid > 0);
	    },
	},

	data() {
	    return {
	        isFollowing: this.resource.isFollowing
	    };
	},

	methods: {
	    toggle() {
	        if(this.isFollowing) {
		    axios.post('/follows', {
		        resource_id: this.resource.id,
			resource_type: this.resource.class
		    });
		    this.isFollowing = false;
		}else{
		    axios.post('/follows', {
		        resource_id: this.resource.id,
			resource_type: this.resource.class
		    });
		    this.isFollowing = true;
		}
	    }
	}
    }
</script>