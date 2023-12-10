const questionContainer = document.getElementById('dissapear-question');
const quizContainer = document.getElementById('dissapear-quiz');
const approvalContainer = document.getElementById('dissapear-approvals');


const questPageBtn = document.querySelector('#my-questions-button')
const quizPageBtn = document.querySelector('#my-quizzes-button')
const approvalPageBtn = document.querySelector('#admin-approvals-button')

removeQuestions();
removeApprovals();

function removeQuestions(){
    questionContainer.style.display = 'none';
}

function removeQuizes(){
    quizContainer.style.display= 'none';
}

function removeApprovals(){
    if (approvalContainer){
        approvalContainer.style.display='none';
    }
}

quizPageBtn.addEventListener('click', (e)=>{
    e.preventDefault();
    removeQuestions()
    removeApprovals();
    quizContainer.style.display='block'
})

questPageBtn.addEventListener('click', (e)=>{
    e.preventDefault();
    removeQuizes();
    removeApprovals();
    questionContainer.style.display='block'
})

if(approvalPageBtn){
        approvalPageBtn.addEventListener('click', (e)=>{
        e.preventDefault();
        removeQuizes();
        removeQuestions();
        approvalContainer.style.display='block';
    })}