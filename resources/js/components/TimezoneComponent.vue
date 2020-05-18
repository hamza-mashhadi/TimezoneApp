<template>
    <div>
        <b-navbar toggleable="lg" type="dark" variant="info">
            <b-navbar-brand href="/">Time Listing According to User's Local Timezone</b-navbar-brand>
        </b-navbar>
        <b-table striped hover :items="items"></b-table>
    </div>
</template>

<script>
    import config from '../config/config';
    export default {
        name: "TimezoneComponent",
        data() {
            return {
                items: []
            }
        },
        methods: {
            getTimezoneList: function () {
                axios({url: config.apiURL + 'timezone', method: 'GET'})
                    .then(resp => {
                        console.log(resp.data);
                        let timezones = resp.data;
                        timezones.forEach((value, index) => {
                            this.items.push({
                                location: value.location,
                                time: (value.time+" "+value.offset),
                                'Local Time': new Date(value.time+" "+value.offset).toTimeString()
                            })
                        });
                    })
                    .catch(err => {
                        console.log(err)
                    });
            }
        },
        created() {
            this.getTimezoneList();
        }
    }
</script>
