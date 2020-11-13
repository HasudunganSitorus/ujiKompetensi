<template>
<div class="contaner">
    <h1><small>Test</small></h1>
</div>
</template>

<script>
export default {
    data: function () {
        return {
            parents: [],
            childs: [],
            loading: true
        }
    },
    mounted() {
        this.loadParent();
        this.loadChild();
    },

    methods: {
        loadParent: function () {
            axios.get('api/parent')
                .then((response) => {
                    this.parents = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
}
</script>
