<template>
    <app-layout>
        <div class="py-12 flex justify-evenly flex-wrap">
            <div id="form_container" class="mx-auto">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container mx-auto pt-10  pb-20  px-20">
                        <div class="bg-green-100  rounded-b text-teal-900 px-4 py-3 my-3" role="alert" v-if="$page.props.flash.message">
                            <div class="flex">
                                <div>
                                    <p class="text-sm">{{ $page.props.flash.message }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-red-100  rounded-b text-teal-900 px-4 py-3 my-3" role="alert" v-if="errors.length != 0">
                            <ul v-for="error in errors" :key="error.index">
                                <li>{{ error }}</li>
                            </ul>
                        </div>
                        <h2 class="text-center text-2xl text-gray-800">{{ $page.props.user.name }}, Where are you?</h2>
                        <form :action="route('location.create')" class="flex justify-center flex-col" method="post"  @submit="checkForm">
                            <input type="hidden" name="_token" :value="csrf">
                            <div class="form-group flex flex-col mt-4">
                                <label class="font-bold">Latitud</label>
                                <input type="text" class="form-control rounded" v-model="location.location_latitud" name="location_latitud" required>
                            </div>
                            <div class="form-group flex flex-col mt-4">
                                <label class="font-bold">Longitude</label>
                                <input type="text" class="form-control rounded" v-model="location.location_longitude" name="location_longitude" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-full bg-gray-800 mt-4 rounded text-white p-4">Upload Location</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="user_locations" class="mx-auto" v-if="locations.length != 0 ">
                <div v-for="location in locations" :key="location.id">
                    <div class="container bg-white overflow-hidden shadow-xl sm:rounded-lg mt-2 p-4">
                        <h6 class="text-xs">{{ format_date(location.created_at)[0] }}. {{ format_date(location.created_at)[1] }} - {{ format_date(location.created_at)[2] }} - {{ format_date(location.created_at)[3] }}</h6>
                        <p><span class="font-bold">Latitud: </span>{{ location.location_latitud }}</p>
                        <p><span class="font-bold">Longitude: </span>{{ location.location_longitude }}</p>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        props:{
            locations : Array
        },
        data() {
            return {
                location: {},
                errors: [],
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        methods: {
            format_date: function (date) {
                let weekend = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]
                let mounths = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]
                date = new Date(date)
                date.setDate(date.getDate() + 1);
                let month = date.getMonth()
                let dayName = date.getDay()
                let day = date.getDate()
                let year = date.getFullYear()
                
                var final_date = []
                final_date[0] = weekend[dayName]
                final_date[1] = day
                final_date[2] = mounths[month]
                final_date[3] = year

                return final_date;
            },
            checkForm: function (e) {
                if (this.validateLat(this.location.location_latitud) && this.validateLon(this.location.location_longitude)) {
                    return true;
                }

                this.errors = [];

                if (!this.validateLat(this.location.location_latitud)) {
                    this.errors.push('Latitud is not correct');
                }
                if (!this.validateLon(this.location.location_longitude)) {
                    this.errors.push('Longitud is not correct');
                }

                e.preventDefault();
            },
            validateLat(lat) {    
                 return isFinite(lat) && Math.abs(lat) <= 90;
            },
             validateLon(lng) {    
                return isFinite(lng) && Math.abs(lng) <= 180;
            },
        },
        mounted(){
            console.log("statuds",this.validateLon(this.location.location_longitude));
        }

    }
</script>
