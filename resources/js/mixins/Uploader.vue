<script>
	import vue2Dropzone from "vue2-dropzone";
	import "vue2-dropzone/dist/vue2Dropzone.min.css";
	import axios from "axios";
	export default {
		data() {
			return {
				cloudinary: {
					name: "lms-edc",
				},
				dropzoneOptions: {
					url: "https://api.lms.com/upload",
					thumbnailWidth: 100,
					thumbnailHeight: 100,
					maxFilesize: 2,
					uploadMultiple: false,
					addRemoveLinks: true,
					autoProcessQueue: false,
					headers: { "My-Awesome-Header": "header value" },
				},
			};
		},
		methods: {
			async uploadFile(file) {
				const formData = new FormData();
				formData.append("file", file);
				formData.append("upload_preset", "xqsyhkma");
				const endpoint = `https://api.cloudinary.com/v1_1/${this.cloudinary.name}/image/upload`;
				try {
					const res = await axios.post(endpoint, formData, {
						headers: {
							"content-type": "multipart/form-data",
						},
					});

					if (res.status == 200) {
						return res.data.secure_url;
					}
				} catch (e) {
					console.log(e);
				}
			},
			getStrippedText(input) {
				return input.replace(/(<([^>]+)>)/gi, "");
			},
		},
		components: {
			vueDropzone: vue2Dropzone,
		},
	};
</script>
