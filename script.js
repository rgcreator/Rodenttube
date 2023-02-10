let search = document.getElementById('search');
let con = document.getElementsByClassName('con');

let conEle = [];

for (let i = 0; i < con.length; i++) {
    conEle.push(con[i]);
}

search.addEventListener('input', (e)=>{
    let serVal = e.target.value.toLowerCase();

    conEle.forEach(ele => {
        let toMatch = ele.textContent.toLowerCase();
        if (!toMatch.includes(serVal)) {
            ele.classList.add('hidden')
        }
        if(toMatch.includes(serVal)){
            ele.classList.remove('hidden')
        }
    });

    if(serVal == ''){
        conEle.forEach(ele => {
            ele.classList.remove('hidden');
        });
    }
})
