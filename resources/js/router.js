import Vue from 'vue'

import Router from 'vue-router'

Vue.use(Router);

const routes = [
	{
		path: "/",
		component: () => import("@/components/admin/admin.vue"),
		children: [
			{
				path: "",
				component: () => import("@/components/admin/home.vue"),
				name: 'admin-home'
			},
			// {
			// 	path: "create",
			// 	component: () => import("@/components/admin/services/create.vue"),
			// 	name: 'service-create'
			// }
		]
	}
]


const router = new Router({
	// mode: 'history',
	routes: routes
})

export default router