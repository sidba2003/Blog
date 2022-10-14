let clform = document.getElementById('clearform');  // connector to the clear post method
clform.addEventListener('click', clearentry);

let subm = document.getElementById('submitpost');  // connector to the cross checker of post and title method
subm.addEventListener('click', entervalue);

function clearentry(){
    let a = window.confirm("Are you sure you want to clear?");

    if (a){
        document.getElementById('blogbody').value = '';
        document.getElementById('blogtitle').value = '';
    }
}

function entervalue(e){

    let b = document.getElementById('blogbody');
    let a = document.getElementById('blogtitle');

    if((a.value=='') || (b.value==''))
    {
        if((a.value=='') && (b.value=='')){
            a.style.backgroundColor = 'yellow';
            b.style.backgroundColor = 'yellow';
            e.preventDefault();
            
        }

        else if(a.value == '')
        {
            // Get HTML head element
             var head = document.getElementsByTagName('HEAD')[0]; 
  
            // Create new link Element
            var link = document.createElement('link');
  
            // set the attributes for link element 
            link.rel = 'stylesheet'; 
        
            link.type = 'text/css';
        
            link.href = 'style.css'; 
    
            // Append link element to HTML head
            head.appendChild(link);   
            
            e.preventDefault();     
        }

        else if(b.value=='')
        {
            b.style.backgroundColor = 'yellow';
            e.preventDefault();
        }
    }
}
