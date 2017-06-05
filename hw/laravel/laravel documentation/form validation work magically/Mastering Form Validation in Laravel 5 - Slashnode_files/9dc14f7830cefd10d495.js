document.write('<link rel="stylesheet" href="https://gist-assets.github.com/assets/embed-8bf0013c72fb64f0bb1bc1872b43e39e.css">')
document.write('<div id=\"gist16697901\" class=\"gist\">\n        <div class=\"gist-file\">\n          <div class=\"gist-data gist-syntax\">\n            \n\n\n\n    <div class=\"file-data\">\n      <table cellpadding=\"0\" cellspacing=\"0\" class=\"lines highlight\">\n        <tr>\n          <td class=\"line-numbers\">\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L1\" rel=\"file-createuserrequest-php-L1\">1<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L2\" rel=\"file-createuserrequest-php-L2\">2<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L3\" rel=\"file-createuserrequest-php-L3\">3<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L4\" rel=\"file-createuserrequest-php-L4\">4<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L5\" rel=\"file-createuserrequest-php-L5\">5<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L6\" rel=\"file-createuserrequest-php-L6\">6<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L7\" rel=\"file-createuserrequest-php-L7\">7<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L8\" rel=\"file-createuserrequest-php-L8\">8<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L9\" rel=\"file-createuserrequest-php-L9\">9<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L10\" rel=\"file-createuserrequest-php-L10\">10<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L11\" rel=\"file-createuserrequest-php-L11\">11<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L12\" rel=\"file-createuserrequest-php-L12\">12<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L13\" rel=\"file-createuserrequest-php-L13\">13<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L14\" rel=\"file-createuserrequest-php-L14\">14<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L15\" rel=\"file-createuserrequest-php-L15\">15<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L16\" rel=\"file-createuserrequest-php-L16\">16<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L17\" rel=\"file-createuserrequest-php-L17\">17<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L18\" rel=\"file-createuserrequest-php-L18\">18<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L19\" rel=\"file-createuserrequest-php-L19\">19<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L20\" rel=\"file-createuserrequest-php-L20\">20<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L21\" rel=\"file-createuserrequest-php-L21\">21<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L22\" rel=\"file-createuserrequest-php-L22\">22<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L23\" rel=\"file-createuserrequest-php-L23\">23<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L24\" rel=\"file-createuserrequest-php-L24\">24<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L25\" rel=\"file-createuserrequest-php-L25\">25<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L26\" rel=\"file-createuserrequest-php-L26\">26<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L27\" rel=\"file-createuserrequest-php-L27\">27<\/span>\n            <span class=\"line-number\" id=\"file-createuserrequest-php-L28\" rel=\"file-createuserrequest-php-L28\">28<\/span>\n          <\/td>\n          <td class=\"line-data\">\n            <pre class=\"line-pre\"><div class=\"line\" id=\"file-createuserrequest-php-LC1\"><span class=\"pl-s2\"><span class=\"pl-k\">&lt;<\/span>?<span class=\"pl-c1\">php<\/span> <span class=\"pl-c1\">namespace<\/span> <span class=\"pl-s3\">App\\Http\\<\/span><span class=\"pl-c1\">Requests<\/span>;<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC2\"><span class=\"pl-s2\"><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC3\"><span class=\"pl-s2\"><span class=\"pl-k\">use<\/span> <span class=\"pl-s3\">App\\Http\\Requests\\Request<\/span>;<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC4\"><span class=\"pl-s2\"><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC5\"><span class=\"pl-s2\"><span class=\"pl-st\">class<\/span> <span class=\"pl-en\">CreateUserRequest<\/span> <span class=\"pl-s\">extends<\/span> <span class=\"pl-e\">Request<\/span> {<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC6\"><span class=\"pl-s2\"><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC7\"><span class=\"pl-s2\">    <span class=\"pl-c\">/**<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC8\"><span class=\"pl-s2\"><span class=\"pl-c\">     * Get the validation rules that apply to the request.<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC9\"><span class=\"pl-s2\"><span class=\"pl-c\">     *<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC10\"><span class=\"pl-s2\"><span class=\"pl-c\">     * <span class=\"pl-k\">@return<\/span> array<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC11\"><span class=\"pl-s2\"><span class=\"pl-c\">     */<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC12\"><span class=\"pl-s2\">    <span class=\"pl-s\">public<\/span> <span class=\"pl-st\">function<\/span> <span class=\"pl-en\">rules<\/span>()<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC13\"><span class=\"pl-s2\">    {<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC14\"><span class=\"pl-s2\">        <span class=\"pl-k\">return<\/span> [<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC15\"><span class=\"pl-s2\">            <span class=\"pl-c\">//<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC16\"><span class=\"pl-s2\">        ];<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC17\"><span class=\"pl-s2\">    }<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC18\"><span class=\"pl-s2\"><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC19\"><span class=\"pl-s2\">    <span class=\"pl-c\">/**<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC20\"><span class=\"pl-s2\"><span class=\"pl-c\">     * Determine if the user is authorized to make this request.<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC21\"><span class=\"pl-s2\"><span class=\"pl-c\">     *<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC22\"><span class=\"pl-s2\"><span class=\"pl-c\">     * <span class=\"pl-k\">@return<\/span> bool<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC23\"><span class=\"pl-s2\"><span class=\"pl-c\">     */<\/span><\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC24\"><span class=\"pl-s2\">    <span class=\"pl-s\">public<\/span> <span class=\"pl-st\">function<\/span> <span class=\"pl-en\">authorize<\/span>()<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC25\"><span class=\"pl-s2\">    {<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC26\"><span class=\"pl-s2\">        <span class=\"pl-k\">return<\/span> <span class=\"pl-c1\">false<\/span>;<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC27\"><span class=\"pl-s2\">    }<\/span>\n<\/div><div class=\"line\" id=\"file-createuserrequest-php-LC28\"><span class=\"pl-s2\">}<\/span>\n<\/div><\/pre>\n          <\/td>\n        <\/tr>\n      <\/table>\n    <\/div>\n\n          <\/div>\n          <div class=\"gist-meta\">\n            <a href=\"https://gist.github.com/mobileka/9dc14f7830cefd10d495/raw/CreateUserRequest.php\" style=\"float:right\">view raw<\/a>\n            <a href=\"https://gist.github.com/mobileka/9dc14f7830cefd10d495#file-createuserrequest-php\">CreateUserRequest.php<\/a>\n            hosted with &#10084; by <a href=\"https://github.com\">GitHub<\/a>\n          <\/div>\n        <\/div>\n<\/div>\n')