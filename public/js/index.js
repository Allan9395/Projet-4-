class Index {
    constructor() {
        this.comment = document.querySelector('.comment')
        this.commentMessage = document.querySelector('#commentMessage')
        this.btnReport = document.querySelector('#btnReport')
        this.reportComment()
    }

    reportComment() {
        this.btnReport.addEventListener('click', (e) => {
            this.comment.style.background = '#ff000029'
            this.commentMessage.style.color = 'red'
            e.preventDefault()
        })
    }
}
const index = new Index()