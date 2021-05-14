<template>
    <div>
        <div class="c-reservation-li">
            <p class="c-text">■日時</p>
            <p class="c-text">{{ date }}</p>
            <p class="c-text">■時間</p>
            <p class="c-text">{{ time }}（10分前集合）</p>
            <p class="c-text">■場所</p>
            <p class="c-text">{{ name }}</p>
            <p class="c-text">（{{ address }}）</p>
            <a class="c-text" v-bind:href="url" target="_blank">GoogleMap</a>
            <p class="c-text">■コーチ</p>
            <p class="c-text">{{ coach}}</p>
        </div>

        <div class="c-evaluation-area js-evaluation-area" v-show="after">
            <p class="c-text p-text-center">レッスンをご評価いただきありがとうございます。</p>
        </div>
        <div class="c-evaluation-area" v-show="before">
            <p class="c-text p-text-center">レッスンの評価をお願いします！</p>
            <div class="c-evaluation-btn-area">
                <button type="submit" class="c-evaluation-btn p-btn-red" v-on:click="goodEvaluation">
                    <i class="fas fa-thumbs-up"></i>
                </button>
                <button type="submit" class="c-evaluation-btn p-btn-blue" v-on:click="badEvaluation">
                   <i class="fas fa-thumbs-down"></i>
                </button>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props:['id','date','time','name','address','url','coach'],
        data:function (){
            return{
                reservation_id: this.id,
                before: true,
                after: false,
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            goodEvaluation:function (){
                this.before = false;
                this.after = true;
                $('.js-evaluation-area').fadeIn(3000);
                var reservation_id = this.reservation_id;
                axios.post('/api/good/' + reservation_id);
            },
            badEvaluation:function (){
                this.before = false;
                this.after = true;
                $('.js-evaluation-area').fadeIn(3000);
                var reservation_id = this.reservation_id;
                axios.post('/api/bad/' + reservation_id);
            },
        }
    }
</script>
