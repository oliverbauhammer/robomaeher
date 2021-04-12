import Velocity from 'velocity-animate';

export default { 
    name: 'features',
    data: function() {
        return {
            activeFeature: 0,
            duration: 300,
            showContent: false
        }
    },
    methods: {
        showFeature(val){
            this.activeFeature = val;
        },
        beforeEnter (el) {
            el.style.opacity = 0
        },
        enter (el, done) {
            Velocity(el,
                { opacity: 1 },
                {
                    duration: this.duration,
                    easing: 'ease-in',
                    complete: () => {
                        this.showContent = el.classList.contains('features__background') ? false : true;
                        done();
                    }
                }
            )
        },
        beforeLeave (el) {
            el.style.opacity = 1
        },
        leave (el, done) {
            Velocity(el,
                { opacity: 0 },
                {
                    duration: this.duration,
                    easing: 'ease-out',
                    complete: () => {
                        this.showContent = el.classList.contains('features__background') ? true : false;
                        done();
                    }
                }
            )
        }
    }
}
