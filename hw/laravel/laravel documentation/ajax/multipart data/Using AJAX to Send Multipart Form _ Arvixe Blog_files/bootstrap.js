
(function(){var run_safe,trigger,universal_trigger_token,validate,settings,control;if(!this.__compete_code_control){this.__compete_code_control={};}
control=this.__compete_code_control;control.synchronous=false;universal_trigger_token="*";validate=function(sites){var hostname,hostname_length,site,_i,_len,tokens=[];if(sites==null){return false;}
hostname=window.location.hostname.toLowerCase();hostname_length=hostname.length;for(_i=0,_len=sites.length;_i<_len;_i++){site=sites[_i];if((site===universal_trigger_token)||(site===hostname)||(hostname.slice(-(site.length+1))===("."+site))){control.token=tokens[_i];return true;}}
return false;};run_safe=function(action,control){try{action.call(window,control);}catch(err){if(typeof console!="undefined"&&console!==null){if(typeof console.error=="function"){console.error(err);}}}};trigger=function(sites,action){if(!(sites&&action)){return null;}
if(validate(sites)){run_safe(action,control);}};trigger(["*"],function(control){this._fanpid='738-055412';var pixpath=(/^https/i.test(window.location.protocol)?'https://trgc.opt.fimserve.com':'http://trgc.opt.fimserve.com')+'/fp.gif'+'?',pixel=function(pid){var a={};var fields={};fields.pixelid=pid;a.setKW=function(s){if(typeof s!="string")return false;fields.sdrowyek=s;return true;};a.setUID=function(s){if((typeof s!="number")&&(typeof s!="string"))return false;fields.diresu=s;return true;};a.setUA=function(s){if(typeof s!="number")return false;fields.egaresu=s;return true;};a.setUG=function(s){if(typeof s!="number")return false;fields.rednegresu=s;return true;};a.setD=function(s){fields.atad=s;return true;};a.persistEvent=function(){var query=[];fields.rnd=Math.round(Math.random()*(new Date()).valueOf());for(var i in fields){if(fields.hasOwnProperty(i)){query.push(i+'='+encodeURIComponent(fields[i]));}}
(new Image(1,1)).src=pixpath+query.join('&');};return a;};if("undefined"!=typeof _fanpid){var p=pixel(_fanpid);if("undefined"!=typeof _fankw)
p.setKW(_fankw);if("undefined"!=typeof _fanuid)
p.setUID(_fanuid);if("undefined"!=typeof _fanua)
p.setUA(_fanua);if("undefined"!=typeof _fanug)
p.setUG(_fanug);if("undefined"!=typeof _fand)
p.setD(_fand);p.persistEvent();}});}).call(this);