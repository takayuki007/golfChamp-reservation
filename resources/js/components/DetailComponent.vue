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

        <div class="c-evaluation-area">
            <p class="c-text p-text-center">レッスンの評価をお願いします！</p>
            <div class="c-evaluation-btn-area">
                <button type="submit" class="c-evaluation-btn p-btn-red">
                    <i class="fas fa-thumbs-up"></i>
                </button>
                <button type="submit" class="c-evaluation-btn p-btn-blue">
                   <i class="fas fa-thumbs-down"></i>
                </button>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        props:['date','time','name','address','url','coach'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
