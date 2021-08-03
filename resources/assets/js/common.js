
var filter_url = '';
var filters = {
    totalItems: 0,
    itemPerPage: 10,
    currentPage: 1,
    totalPages: 1
};
var multipleFilter = [];
var div_id = '';

$(document).ready(function (){
    $('#recordPerPage').val(filters.itemPerPage);
    $('#status_search').trigger('focus');
    
    $(document).on('click','.page_no',function(){
        var cp = $(this).data('page');
        var table = $(this).data('table');
        
        filters.currentPage = cp;
        var furl = multipleFilter[table]['filter_url'];
        filterData(furl,table);
    });
    
    $(document).on('keydown','.ui-autocomplete-input',function(e){
        var k = e.which;
        
        if(k == 40 || k == 38){
            $('.ui-autocomplete .ui-menu-item').removeClass('custom-autocomplete-hover');
            $('.ui-autocomplete li a').each(function(){
                
                if($(this).hasClass('ui-state-focus')){
//                    console.log($(this));
                    $(this).parent('li').addClass('custom-autocomplete-hover');
                }
            });
//            console.log($('.ui-autocomplete li').find('a .ui-state-focus').html());
            
//            $('.ui-autocomplete li').find('a .ui-state-focus').parent('li').addClass('custom-autocomplete-hover');
        }
    });
});

function changeRecordPerPage(url,table){
    var id = '';
    if(typeof table !== 'undefined'){
        id= '-'+table;
    }
    var recPp = $('#recordPerPage'+id).val();
    if(recPp == '' || recPp <= 0){
        Toast(0,'Please select valid page limit');
        return false;
    }
    filters.currentPage = 1;
    filters.itemPerPage = recPp;
    
    if(typeof table === 'undefined'){
        table = 'table-data';
    }
    filterData(url,table);
}

function filterData(url,table){
    
    var token = $("#token").val();
    filters._token=token;
    if(typeof table === 'undefined'){
        table = 'table-data';
    }
//    console.log(filters);
//    console.log(multipleFilter[table]);
    var flush = 1;
    if(typeof multipleFilter[table] !== 'undefined' && typeof multipleFilter[table]['filters'] !== 'undefined'){
        flush = 0;
//        console.log(multipleFilter[table]['filters'],filters);
        $.each(multipleFilter[table]['filters'],function(k,v){
//            console.log(k,v);
            if(typeof filters[k] === 'undefined'){
                filters[k] = v;
            }
        });
//        console.log(multipleFilter[table]['filters'],filters);
    }else{
        multipleFilter[table] = {};
    }
    
    var jdata = filters;
    
    
    filter_url = url;
    
    $.ajax({
        type:'POST',
        url:url,
        // dataType: 'json',
        data:JSON.stringify(jdata),
        contentType: "application/json",
        async:false,
        success: function(res){
            if(res.flag === 0){
                console.log(res);
            }else{
                $("#"+table).html(res.blade);
                filters.totalItems = res['total_record'];
                filters.totalPages = filters.totalItems > 0 ? Math.ceil(filters.totalItems / filters.itemPerPage) : 0;
                setPagination(table);
            }
            
            multipleFilter[table]['filters'] = filters;
            multipleFilter[table]['filter_url'] = filter_url;
            flushFilters(flush);
            
        }, 
    });
    
    
}
function flushFilters(keep){
    
    if(keep){
        filters = {
            totalItems: 0,
            itemPerPage: filters.itemPerPage,
            currentPage: 1,
            totalPages: 1
        };
    }else{
        filters = {};
    }
}
function setPagination(table){
    var tp = filters.totalPages;
    var cp = filters.currentPage;
    
    var p = prevPage(cp,tp,0);
    var li = '';
    var fl = '<a class="btn btn-default page_no" data-page="'+1+'"  data-table="'+table+'" data-type="f" href="#"><i class="fa fa-angle-double-left"></i></a>';
    var ll = '<a href="#" data-page="'+tp+'" data-type="l" data-table="'+table+'" class="btn btn-default page_no"><i class="fa fa-angle-double-right"></i></a>';
    var pp = '<a href="#" data-page="'+p+'" data-type="p"  data-table="'+table+'" class="btn btn-default page_no"><i class="fa fa-angle-left"></i></a>';
    var p = prevPage(cp,tp,1);
    var np = '<a href="#" data-page="'+p+'" data-type="n"  data-table="'+table+'" class="btn btn-default page_no"><i class="fa fa-angle-right"></i></a>';
    var ns = '';
    var ps = '';
    var prev = cp - 7;
    var next = cp + 7;
    var pflag = 1;
    var nflag = 1;
    if(prev < 0){
        pflag = 0;
    }
    if(next > tp){
        pflag = 0;
    }
    if(tp < 7){
        for(i = 1;i<=tp;i++){
            li += '<a href="#" data-page="'+i+'" data-type="'+i+'"  data-table="'+table+'" class="btn btn-default page_no">'+i+'</a>';
        }
    }else{
        var nd = nextDigit(cp,tp,1);
        var dp = nextDigit(cp,tp,0);
        if(nd<tp){
          ns = '<a href="#" data-page="'+(nd+1)+'" data-type="'+(nd+1)+'"  data-table="'+table+'" class="btn btn-default page_no other-page"><i class="fa fa-ellipsis-h"></i></a>';
        }
        
        if(dp == nd){
            dp = (nd-7) > 0 ? (nd-7) : 1;
        }
//        console.log(dp + ' - ' + nd);
        if(dp>1){
            ps = '<a href="#" data-page="'+(dp-1)+'" data-type="'+(dp-1)+'"  data-table="'+table+'" class="btn btn-default page_no other-page"><i class="fa fa-ellipsis-h"></i></a>';
        }
        
        
        
        for(i=dp;i<=nd;i++){
            li += '<a href="#" data-page="'+i+'" data-type="'+i+'"  data-table="'+table+'" class="btn btn-default page_no">'+i+'</a>';
        }
    }
    
    li = fl+pp+ps+li+ns+np+ll;
    var cls1 = '';
    var cls2 = '';
    if($('.pagination').hasClass(table)){
        cls1 = '.'+table;
        cls2 = '.'+table;
    }
    
    $(cls1+'.pagination').html(li);

    $(cls1+' .page_no').each(function(){
        var tp = $(this).data('type');
        if(tp == cp){
            $(this).addClass('active');
        }
    });
    
    if(cp == 1){
        $(cls2+'.pagination a:first-child').removeClass('page_no').addClass('pagination-disable');
        $(cls2+'.pagination a:nth-child(2)').removeClass('page_no').addClass('pagination-disable');
    }
    if(cp == tp){
        $(cls2+'.pagination a:last-child').removeClass('page_no').addClass('pagination-disable');
        $(cls2+'.pagination a:nth-last-child(2)').removeClass('page_no').addClass('pagination-disable');
    }
    if(tp <= 1){
        $(cls1+'.pagination').html('');
    }
    
}
function prevPage(cp,tp,t){
    var p = 1;
    if(t){
        p = cp + 1 < tp ? cp + 1 : tp > 0 ? tp : 1;
    }else{
        p = cp - 1 > 0 ? cp - 1 : 1;
    }
    
    return p;
}

function nextDigit(cp,tp,t){
    if(t){
        for(i=cp;i<=tp;i++){
            if(i%7 == 0){
                return i;
            }
        }
        return tp;
    }else{
        for(i=cp;i>0;i--){
            if(i%7 == 0){
                return i;
            }
        }
        return 1;
    }
    
}

//function Toast(val,time) {
//    $('body').append('<div id="toast"></div>');
//    $('#toast').html(val);
//    var x = document.getElementById("toast");
//    
//    x.className = "show";
//    if(typeof time == 'undefined' || time == null){
//        time = 3000;
//    }
//
//    setTimeout(function(){ x.className = x.className.replace("show", "");$('#toast').remove();time == null;}, time);
//}

// function Toast(flag,val,time) {
//     $('#toast').remove();
    
//     var noti_html = document.createElement('div');
    
//     var id = "toast";
//     var att = document.createAttribute("id");       
//     att.value = "toast";                           
//     noti_html.setAttributeNode(att);
    
//     if(flag==1){
//         noti_html.className = "notification is-success";
//     }else if(flag==0 || flag==2){
//         noti_html.className = "notification is-danger";
//     }else {
//         noti_html.className = "notification is-warning";
//     }
    
//     $('body').append(noti_html);
//     $(noti_html).html(val);
    
//     var notifications = new Notifications("#"+id, {closeSelfOnClick: true});
//     notifications.init();
   
    
//     if(typeof time == 'undefined' || time == null){
//         time = 4000;
//     }

//     setTimeout(function(){
//         $(noti_html).remove();
//         time == null;
//     }, time);
// }

function getBaseURL(){
    var url = $('meta[name="base-url"]').attr('content');
    return url;
}

function postAjax(url,data,cb){
    var token = $('meta[name="csrf-token"]').attr('content');
    var jdata = {_token:token};
    
    for(var k in data){
        jdata[k]=data[k];
    }
    
    $.ajax({
        type:'POST',
        url:url,
        data:jdata,
        success: function(data){
            if(typeof(data)==='object'){
                if(data.flag==8){
                    window.location.replace("{{URL::to('login')}}");
                }
                cb(data);
            }
            else{
                cb(data);
            }
        }, 
    });
}

function getAjax(url,data,cb){
    var token = $("#token").val();
    var jdata = {_token:token};
    
    for(var k in data){
        jdata[k]=data[k];
    }
    
    $.ajax({
        type:'GET',
        url:url,
        data:jdata,
        dataType:'JSON',
        success: function(data){
            if(typeof(data)==='object'){
                if(data.flag==8){
                    window.location.replace("{{URL::to('login')}}");
                }
                cb(data);
            }
            else{
                cb(data);
            }
        }, 
    });
}




function pad(d) {
    return (d < 10) ? '0' + d.toString() : d.toString();
}



function getData(urlto,crnt,len,type,opr,search,extra,tableViewId){
    
    var url=getBaseURL()+urlto;
    var data={crnt:crnt,len:len,type:type,opr:opr,search:search};
    if(typeof extra !=='undefined'){
        for(var i in extra){
            data[i] = extra[i];
        }
    }
    postAjax(url,data,function(res){
        if(res.flag==0){
           //            console.log(typeof alt !== 'undefined');
            if(typeof tableViewId !== 'undefined'){
                $('#alert-error').html('<h3 style="color:red;">No Data Found !!</h3>');
                $('#alert-error').css('display','block');
                $('#table-'+tableViewId).css('visibility','hidden');
                $('#paginate-btn').css('display','none');
                Toast(res.flag,res.msg, 2000);
                return false;
            }else{
                $('#alert-error').html('<h3 style="color:red;">No Data Found !!</h3>');
                $('#alert-error').css('display','block');
                $('#table-data').css('visibility','hidden');
                $('#paginate-btn').css('display','none');
                Toast(res.flag,res.msg, 2000);
                return false;
            }
        }
        else{
            if(typeof tableViewId !== 'undefined'){
                $("#table-"+tableViewId).html(res);
                $('#alert-error').css('display','none');
                $('#table-'+tableViewId).css('visibility','visible');
                $('#cntrlbtn-'+tableViewId).css('display','block');
                $("#crnt-"+tableViewId).val($("#current-"+tableViewId).val());
                $('#crnt-'+tableViewId).attr('max',$("#total_page-"+tableViewId).val());
                $('#crnt-'+tableViewId).attr('min',1);
                $("#len-"+tableViewId).val($("#len-"+tableViewId).val());
                $("#total-"+tableViewId).html($("#total_page-"+tableViewId).val());
            }else{
                $("#table-data").html(res);
                $('#alert-error').css('display','none');
                $('#table-data').css('visibility','visible');
                $('#paginate-btn').css('display','block');
                $("#crnt").val($("#current").val());
                $('#crnt').attr('max',$("#total_page").val());
                $('#crnt').attr('min',1);
                $("#page-len").val($("#len").val());
                $("#total").html($("#total_page").val());
            }
            
            
            if($("#total_page").val()==0){
              $("#nodata").hide();
              $("#n-found-msg").show();  
            }else{
                 $("#n-found-msg").hide();  
                $("#nodata").show();
            }
            
        }
    });

}



$(document).ready(function(){
    $('#changePass').on('click',function(){
        var new_pass = $('#new_pass').val();
        var cnew_pass = $('#cnew_pass').val();
        
        var url = getBaseURL()+"user/change-pass";
        var data={new_password : new_pass, confirm_password: cnew_pass};
        postAjax(url,data,function(res){
            if(res.flag != 1){
                $('#chnPasswordModal').find('.success').css('display','none');
                $('#chnPasswordModal').find('.failed').html(res.msg);
                $('#chnPasswordModal').find('.failed').css('display','block');
            }
            else{
                $('#chnPasswordModal').find('.failed').css('display','none');
                $('#chnPasswordModal').find('.success').html(res.msg);
                $('#chnPasswordModal').find('.success').css('display','block');
                $('#new_pass').val('');
                $('#cnew_pass').val('')
            }
        });
    });
    
   
    $('#savaInfo').on('click',function(){
//        alert('Hello');
        var url = getBaseURL() + "user/update-profile";
        
        $('#updateInfo').attr('action',url);
        $('#updateInfo').ajaxForm(function(res) {
            console.log(res);
            if(res.flag != 1){
                $('#editProfileModal').find('.success').css('display','none');
                $('#editProfileModal').find('.failed').html(res.msg);
                $('#editProfileModal').find('.failed').css('display','block');
                return false;
            }
            else{
                $('#editProfileModal').find('.failed').css('display','none');
                $('#editProfileModal').find('.success').html('Your Information Updated successfully !!');
                $('#editProfileModal').find('.success').css('display','block');
                $('#user_pic').attr('src',res.data.avatar);
            }
        }).submit();
//        });
    });
    
    $('#frmToken').on('submit',function(e){
        e.preventDefault();
        $('#token_buy').click();
    });
    
    $('#chnPasswordModal').on('hidden.bs.modal', function (e) {
        $(this).find('.success').css('display','none');
        $(this).find('.failed').css('display','none');
    });
    
    $('#editProfileModal').on('hidden.bs.modal', function (e) {
        $(this).find('.success').css('display','none');
        $(this).find('.failed').css('display','none');
    });
});

function filterPageData(urlto,len,extra,div_id){
    // console.log(div_id);
    if(typeof len === 'undefined' || len ==''){
        len = $('#len').val();
    }
    if(typeof extra === 'undefined'){
        extra = {};
    }
    
    var crnt = $('#crnt').val();
    var type = $('#type').html();
    
    var id = 'total';
    if(div_id == 'btable'){
         crnt = $('#crntb').val();
         len = $('#lenb :selected').val();
        id = 'totalb';
    }else if(div_id == 'table-adv'){
        crnt = $('#crnt-adv').val();
         len = $('#len-adv :selected').val();
        id = 'total-adv';
        var tableViewId = 'adv';

    }
    
    var search = $('#searchname').val();

    if(crnt > parseInt($("#"+id).html()) && parseInt($("#"+id).html()) != 0){
       
        return false;
    }
   
    if(getData(urlto,crnt,len,type,'',search,extra,tableViewId)==false){
        
        return false;
    }
}

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}


function filterDataWith(urlto,elem,extra,div_id){
   // console.log(div_id);
    var crnt = $('#crnt').val();
    var len = $('#len :selected').val();

    if(div_id == 'btable'){
        var crnt = $('#crntb').val();
        var len = $('#lenb :selected').val();
    }else if(div_id == 'table-adv'){
        crnt = $('#crnt-adv').val();
        len = $('#len-adv :selected').val();
        var tableViewId = 'adv';
    }
    
    var type = $('#type').html();
    var opr = elem.id;
    var search = $('#searchname').val();
    
    if(typeof extra === 'undefined'){
        extra = {};
    }
    
    getData(urlto,crnt,len,type,opr,search,extra,tableViewId);
}
function tt(){
    var a = '';
    for (var i = 0; i < arguments.length; i++) {
        if (a == '') {
            a += arguments[i]; 
        }else{
            a += ',' + arguments[i] ; 
        }
        
        // console.log(arguments[i]);
    } 
    console.log(a);
    // console.log(...args);
}
function modalOpen(mdlname,title,msg,onsuccess,id,onabort){
    $('#'+mdlname+'').find('#mdltitle').html(title);
    $('#'+mdlname+'').find('#mdlmsg').html(msg);
    $('#'+mdlname+'').find('#mdlyes').attr('onclick',onsuccess+'('+id+')');
    
    if(onabort!=='')
        $('#'+mdlname+'').find('#mdlabort').attr('onclick',onabort+'()');

    $('#'+mdlname+'').modal('show');

}


function valiToast(){
    Toast(0,'Please fill required filled');
    throw 'Please fill required filled';
}

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    // console.log(vars);
    return vars;
}
function redirectUrl($type){
    var params = getUrlVars();
   // var paramR = params.r;
    if(typeof params.r !== 'undefined' && params.r != ''){
        window.location = getBaseURL()+params.r;
    }else{
        if ($type == 'user') {
            window.location = getBaseURL();    
        }else if ($type == 'seller') {
            window.location = getBaseURL()+'/seller/dashboard';
        }
    }
}

function confirmation(cb,msg,title){

    if(typeof cb !== 'undefined' || cb !== null || cb !== '')
    {
        $('#confirm_yes').attr('onclick',cb);
    }
    
    if(typeof title !== 'undefined' || title !== null || title !== '')
    {
        $('#confirm_title').html(title);
    }

    if(typeof msg !== 'undefined' || msg !== null || msg !== '')
    {
        $('#cnf-msg').html(msg);
    }

    $('#confirm-modal').modal('show');
}
$(document).on('click','#confirm_yes',function(){
    $('#confirm-modal').modal('hide');
});

// ==========-----------scrooll-nav-------------

 window.onscroll = function() {
    scrollFunction();
    scrollFunctionMobile();
 };

  function scrollFunction() {
    if (document.body.scrollTop >100 || document.documentElement.scrollTop >100) {
        if(document.getElementById("scrooll-nav")!=null){
            document.getElementById("scrooll-nav").style.top = "0";
        }      
    } else {
        if(document.getElementById("scrooll-nav")!=null){
            document.getElementById("scrooll-nav").style.top = "-66px";
        }
    }
  }

  function scrollFunctionMobile() {
    if (document.body.scrollTop >100 || document.documentElement.scrollTop >100) {
        if(document.getElementById("scrooll-nav-2")!=null){
            document.getElementById("scrooll-nav-2").style.top = "0";
        }
      
    } else {
        if(document.getElementById("scrooll-nav-2")!=null){
            document.getElementById("scrooll-nav-2").style.top = "-66px";
        }
        if(document.getElementById("mod-div-mk")!=null){
             document.getElementById("mod-div-mk").style.display = "none";
        }
    }
  }


  $(document).ready(function(){
    $('.bar').click(function () {
        $('.mod-div-mk').slideToggle() ;
    });

    $(document).on('click','.dropdown-menu a', function(e){
        var val = $(this).attr('data-value');
        $(this).parents('.select-box').find('.selected-value').val(val);
        $(this).parents('.select-box').find('.dropdown-select').text($(this).text());

        var fn = $(this).parents('.dropdown-menu').data('function');
        if (fn) {
            var call = fn+'('+val+')';
            eval(call);    
        }
    });
    
  });
  
function imagePreview(input,selector) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $(selector).attr('src', e.target.result).show();
      }

      reader.readAsDataURL(input.files[0]);
    }
}
function multiImagePreview(input,selector,size) {
    var size = size?size:200;
    if (input.files && input.files.length>0) {
       $.map(input.files,function(imgFile){
           var reader = new FileReader();
            reader.onload = function(e) {
                $(selector).append('<img src="'+e.target.result+'" width="'+size+'">' ).show();
            }
            reader.readAsDataURL(imgFile);
       }) 
    }
}
function cancel_enter(event,fnc){
    if(event.keyCode==13){
        if(typeof fnc!='undefined'){
            eval(fnc);
        }
        return false;
    }
}