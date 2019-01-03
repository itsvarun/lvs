<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div v-for="status in statuses" class="message">
                    <div class="message-header">
                        {{ status.user }} moments ago
                    </div>
                    <div class="message-body" v-text="status.text" ></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                statuses: []
            }
        },
        created() {
            axios.get('/statuses')
                .then(({ data }) => this.statuses = data)
        },
    };
</script>
