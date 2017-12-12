<template>
    <div class="input-group">
        <input type="text" class="form-control" aria-label="" v-model="favoritesCount" disabled>
	<span class="input-group-btn">
	    <button :class="classes" type="button" @click="toggle">Favorite</button>
	</span>
    </div>
</template>

<script>
    export default {
        props: ['reply'],
    
        mounted() {
	    console.log('Favorite component mounted.')
	},

	computed: {
	    classes() {
	        return ['btn', this.isFavorited ? 'btn-secondary' : 'btn-primary'];
	    }
	},

	data() {
	    return {
	        favoritesCount: this.reply.favorites_count,
		isFavorited: this.reply.isFavorited
	    }
	},

	methods: {
	    toggle() {
	        if(this.isFavorited) {
		    axios.post('/favorites', {
		        resource_id: this.reply.id,
			resource_type: 'App\\Models\\Reply'
		    });
		    this.isFavorited = false;
		    this.favoritesCount--;
		}else{
		    axios.post('/favorites', {
		        resource_id: this.reply.id,
			resource_type: 'App\\Models\\Reply'
		    });
		    this.isFavorited = true;
		    this.favoritesCount++;
		}
	    }
	}
    }
</script>