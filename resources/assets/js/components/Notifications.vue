<template>
    <li class="nav-item dropdown" v-show="notifications.length">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    <font-awesome-icon :icon="icon" />
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	    <a class="dropdown-item" :href="notification.data.link" v-for="notification in notifications" v-text="notification.data.message" @click.prevent="markAsRead(notification)"></a>
	</div>
    </li>
</template>

<script>
    import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
    import { faBell } from '@fortawesome/fontawesome-pro-solid'

    export default {
        components: { FontAwesomeIcon },

        mounted() {
            console.log('Notifications component mounted.')
        },

	data() {
	    return {
	        notifications: false
	    };
	},

	computed: {
	    icon () {
                return faBell;
            }
        },

	created() {
	    axios.get('/notifications/list?unread=1')
	        .then(response => this.notifications = response.data);
	},

	methods: {
	    markAsRead(notification) {
	       var link = notification.data.link
	       axios.delete('/notifications/' + notification.id);
	       window.location.href = link;
	    }
	}
    }
</script>