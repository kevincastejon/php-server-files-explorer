<!doctype html>

<html>

    <head>
        <title>Server File Explorer</title>
        <meta charset="UTF-8">
        <style>
            :root {
                --dirWhite:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAjCAYAAABl/XGVAAADQklEQVRIS72XvY8bRRTAf29212fu2+I+ciGJDokIIZI0FFBcpBwg+A9CGiokpFRRmtQpkoYmbVKEBkFDmyZpIoEiCop0XEEookigk47zOWdy2Y+ZR+Fbez2764uFw09aedd+3p/fvDfjWVFV/i9CABF5LUZVleJ1mJ/s/n6HJrsk3W3QBGtaODUYAWMsgWSExiGBIBiMMSAGMQYQxASIMQiGrWcveH/jZknel4lAc+4kYTTLy+dP6SYLzBy/gGQdsHukWczLLEGyPUQcRg2BJEQuJgotoKAKIwYpHJwqIkI03ULCKbo7L5haeBcRAXWoKqqAppDtIFkblx4QZynduIPJ/kFRBCV17aNkOULYmGH12AyZdnGmBSII0CtAE6I5YJ0ACICmApqA28dke6xGf7Nx4dNSL4iqIiLafnKbxfk5zxuSTZ0hC0+BVPyuVyBJUraePOWjD85i6sMUXEwQ/4ZxnfqwI2g0Ik6sLQOMkPUKBJr16jQBamSHInLpZKiWKQVhQfwfqam6G8ybCYmozkwHInUD8QQoy9QdiiY7hJSH0a+TFsQeqijaWxdlaL2tZTgz9Wo1ohNtuk988BxrLWkS18YVGcjUVojqh1E1wzmLtZZ2p41ztjKuSCEzfwid9+ohIdY6nrUP+OHRH7Q71YtvkaFVv1+fUnYVqENQ/trZZXPtJ1oYYKk69pBhWSmr+qEUExHHe7y3HNBaOYeZOV2K8RnIlEHbo4Pr/NwjiKZZbC0hEgAfo8EUR/VkdWbqZ1eFEESzNZ9VM9wgRclQN9YJx6PQ+vkN/QwnI6K8XFUtVRFqxhuuOrwVpFw3DebRcLH2BuPgZeY1iOYhI3YPY+DV7PU0Rr4v68uuXv+xMM+cJ50MIYCqioioCHz7zaVClo4/t7f55ddHRFFIa2GelTcXWV1qMf1G86h7l+hP6lyYJpbvbn3RF16+dpd79x9Xfvn85md8dfkKc7PTvLP+FusnjtGIoorI3ugM/XnmwiS1fH/rImGg3Lv/uPQ0kiMi+vPDB6X3Pzy/ycUvv+bU8RXePrlGIzrU9Pbwwwegn39yTve3bmgvpBwz6vA6rH9I3cNgcZ9el9m41E4gVZVJSXL+BTFz3dkBpYQ9AAAAAElFTkSuQmCC');
                --emptyDirWhite:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAjCAYAAABl/XGVAAACxklEQVRIS71XPWtUQRQ9921WTUKCICooaGHAxiqksLG2EkljK7b+A8U/YGUZJHaxEPwJIhapI1b+AcVGC426uOvuHIuZO3Pn44VNjB4Y3szsfffMPffOzFshif+FBe2IyLGzkhQ7XjB9uM8vMd7/gMn3j6AbQ0TQdR0AgXQdRDo/7iT1xc+jGHeXHlbknR0IiFOrl7F45hq64QpAwMucGp0DwhxJ31cbMpi1RcrIQAdwguHiaSydXUc3XAHJ4EsdEHTMxkrEOG4jJ9MX3RiD4UksX7iBweI5QCSQJkd0MAQ6aVWoUZApCMx+QjjG8vnrOLG6FqZzSVVCK3Xq1+ghC5iNgOk+hksX6zwVfRiSvu10AJk6mYJwMff+F7P6SGjfa6OfjADgfPMJSpJF6Zw3Y1hAVjQ1GgVi+5oX5wvEMVlF34WMPRLiwAKBi0R+3SFPzlW26j8uZf6cNZJOF6QKFmSSzYZ5OBkVekq4FKVGhlQUqVCylbRdNnNWRZUKwudMieIb4UkzaqNRIDYqxIrUYiDz6JJ85jmXjJkxTcmHIin85FHZiXnI0LPaWAjJJp0eabroVGgfxKYgooxhnPHCRqEV6n+/d2e9upCzy7MZlSQnIABpyKTzBs8e38J46r8A9MZu5CwdTTFfdGHdNmk02UrkWkgA8PzJ7cx9IWO6hXPCOg9Ux+Wdpio0cteTM5Mvuw2ojzJx9l0zLNAu/Ubu6uAazhsEFv0nSKzIAaaTH8miVRxzos6ZjQwCiGD07ROg8s2JlmUhI4qoPOl0MuoNYZ4zUXGAjNp3h4rIopQ829SzmcOgc0ZG4v6DF9ja2S39HAlZZDfvboebOBXJ1s4uSMrftIqMpLx+8w4bm08x+vXbyHh8yCIjKW/33mNjcxtfvo6Pmwvxs9o2ALxydY17rx7Rm9Q2R2lSbdIAez2U/7OOil6yf4E/BU3KXfTNtdgAAAAASUVORK5CYII=');
                --fileWhite:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAjCAYAAABl/XGVAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOdAAADnQBaySz1gAAABZ0RVh0Q3JlYXRpb24gVGltZQAwMS8yMC8xONWqBscAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzbovLKMAAAC3UlEQVRIibWXzWsTQRjGn9mdJCSCKJb6cWlpi5VKL0JuBU8KHhT8QCp4KKKIICII/lXeioJHpR48CN6UHHqJCFaQIrVbo9nHw87n7uxmt8QhkJ2Z953f+/HMphXrD57x7PxpgARJAAAJQKhvEExTtU5QGVBkBmaemeL77h5evH6Pvf0DgdyQZ2aP48nDDfR6vfwelH/FRGTBAIiEwObmJhYWl7D78xdevf3I0Z+/HlACQLvdQavVsufRPVJPTKoWQwIiA8ZRBCEElhYX8HjjBvaT33jz4TNHIwuMvGCnMOI4xur5FTx/dAdXL17AkW7HIKIs2ukhx+MxpJRYObeMp/dv49blvgFGqjJojtQl9EeapkjTFHEcY35uDvfWr+HK2io67RZlARFUhO2X0oRRbH4kSQKSBnrq5CzuXr+ET9tfIekeXsWtyhAZ/MTMDLa23hW8k+QAQgjYzIIKLGZlglMlJLMEU6bo9/t2H9QfDAYDgC8z6XsRlkTuL9l+KeUDAFqttu/HzCCOYwBExJRGHMVjRbBtNivr4fvarOxuVHbPFMSUj355FCggxvCgxlGHIGx6rvIAkObBLBoQAxUpUZa0Ho6FezYAAZWZSyg9tNh7/bKWplcuIH8FHJApXxWvZEhdRua81NEgRANQXhg5GHUPHAfTNkcBtUClARBEpDLzjGxOcBQnHKOyVpVlpF8SkoIgWJCyJ2sGH51FlveOWuRjSKjXTfDOTIJM2DE9VyaSlbWpAakqn3mrZRRp06w7JkMMKRewDFtWQGqCQvuyyW9WrYscAqm7LJm/zfnjaomkAuR4S9swNju4NsRqwqgxmOBkyuT+aRoaCeQQkNyQk0oQAjWvghaIntQwrmNZ4g1fIKV/T0xh0BEI0bSUh6ABiP4zxRuSIIbDIbrdrvnnrxCTs87iRjb1N7y1bzs7AAGxvHaTx472rJ1Wp/lVpgfwCu7OHSP96Aaw/eUH/gGZD8Zbz4Pm/AAAAABJRU5ErkJggg==');
            }
            body{
                border: 0px solid red;
            }
            .dir {
                list-style-image: var(--dirWhite);
            }
            .emptyDir {
                list-style-image: var(--emptyDirWhite);
            }
            .file {
                list-style-image: var(--fileWhite);
            }
            * {
                box-sizing: border-box;
            }
            a {
                color: black;
                text-decoration: none;
            }
            th {
                border-right: 1px solid black;
            }
            table{
                text-align: left;
                width: 100%;
            }

            #main {
                display: flex;
            }
            #arbo,
            #dirExplorer {
                overflow: auto;
                padding: 15px 15px;
                flex: 1 1 auto;
            }
            #arbo {
                width: 20%;
                border-right: 1px solid black;
            }
            #dirExplorer {
                width: 80%;
                border-left: 1px solid black;
                word-break: keep-all;
                word-wrap: normal;
            }
            #arbo span {
                width: 100%;
                display: inline-block;
                border: 0px solid green;
                cursor: pointer;
            }
            #dirExplorer span {
                border: 0px solid green;
                width: 27px;
                height: 35px;
                margin-right: 5px;
                display: inline-block;
            }
            #dirExplorer .dir{
                background-image: var(--dirWhite);
                background-repeat: no-repeat;
            }
            #dirExplorer .emptyDir{
                background-image: var(--emptyDirWhite);
                background-repeat: no-repeat;
            }
            #dirExplorer .file{
                background-image: var(--fileWhite);
                background-repeat: no-repeat;
            }
            span, table{
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            span:hover {
                text-decoration: underline;
            }
            #dirExplorer li:hover{
                background-color: #e6e6e6;
            }
            .rowUnselected:hover{
                border: 1px solid red;
                background-color: #e6e6e6;
            }
            thead tr {
                background-color: #fcfcfc;
            }
            th:hover {
                background-color: #e6e6e6;
            }
            .rowSelected, .rowSelected:hover{
                background-color: #818181;
            }
            button{
                background: none;
                border: none;
                font-size: 1em;
                background-color: #fcfcfc;
            }
            th:active{
                background-color: #a9bfd1;
            }
            button:before {
                content: "/ ";
            }
            button:hover{
                background:1px solid black;
                background-color: #a9bfd1;
                border-radius: 3px;
            }
        </style>
    </head>

    <body>
        <div id="main">
            <div id="arbo">
            </div>
            <div id="dirExplorer">
                <h2></h2>
            </div>
            <script>
                var sortCat = "name";
                var sortAsc = true;
                var orderChars = ["▲", "▼"];
                var currentExplorerPath;
                var jsonString = '<?php echo ' { "' . basename(getcwd()) . '": ' . getDirContents('.') . '}'; ?>';
                var fileTree = JSON.parse(jsonString);
                var htm = getNavListElementFromDir(fileTree);
                arbo.appendChild(htm);
                var uls = document.getElementsByTagName("LI");
                for (var i = 0; i < uls.length; i++) {
                    if (i == 0)
                        uls[i].firstChild.click();
                    uls[i].click();
                }

                function getNavListElementFromDir(object) {
                    var ul = document.createElement("ul");
                    ul.style.display = "block";
                    for (var o in object) {
                        if (o != "modificationDate" && o != "size") {
                            if (object[o]["extension"] == undefined) {
                                var liDir = document.createElement("li");
                                liDir.addEventListener("click", toggleCollapse);
                                var span = document.createElement("SPAN");
                                span.addEventListener("click", function (e) {
                                    currentExplorerPath = [];
                                    var el = e.target;
                                    while (el.parentElement != arbo) {
                                        if (el.parentElement.tagName == "LI") {
                                            currentExplorerPath.unshift(el.parentElement.firstElementChild.innerText);
                                        }
                                        el = el.parentElement;
                                    }
                                    openDir();
                                });
                                span.addEventListener("dblclick", redispatchClickFromParent);
                                span.innerHTML = o;
                                liDir.appendChild(span);
                                if (Object.keys(object[o]).length > 2) {
                                    liDir.className += "dir";
                                } else {
                                    liDir.className += "emptyDir";
                                }
                                liDir.appendChild(getNavListElementFromDir(object[o]));
                                ul.appendChild(liDir);
                            }
                        }
                    }
                    return (ul);
                }

                function getTableElementFromDir(object) {
                    var table = document.createElement("table");
                    var thead = document.createElement("thead");
                    var thr = document.createElement("tr");
                    var thName = document.createElement("th");
                    thName.innerHTML = "Name";
                    if (sortCat == "name")
                        thName.innerHTML += orderChars[+!sortAsc];
                    thName.onclick = function (e) {
                        if (sortCat == "name")
                            sortAsc = !sortAsc;
                        sortCat = "name";
                        openDir();
                    };
                    var thSize = document.createElement("th");
                    thSize.innerHTML = "Size";
                    if (sortCat == "size")
                        thSize.innerHTML += orderChars[+!sortAsc];
                    thSize.onclick = function (e) {
                        if (sortCat == "size")
                            sortAsc = !sortAsc;
                        sortCat = "size";
                        openDir();
                    };
                    var thDate = document.createElement("th");
                    thDate.innerHTML = "Modification Date";
                    if (sortCat == "modificationDate")
                        thDate.innerHTML += orderChars[+!sortAsc];
                    thDate.onclick = function (e) {
                        if (sortCat == "modificationDate")
                            sortAsc = !sortAsc;
                        sortCat = "modificationDate";
                        openDir();
                    };
                    var thType = document.createElement("th");
                    thType.innerHTML = "Type";
                    if (sortCat == "type")
                        thType.innerHTML += orderChars[+!sortAsc];
                    thType.onclick = function (e) {
                        if (sortCat == "type")
                            sortAsc = !sortAsc;
                        sortCat = "type";
                        openDir();
                    };
                    thr.appendChild(thName);
                    thr.appendChild(thSize);
                    thr.appendChild(thDate);
                    thr.appendChild(thType);
                    thead.appendChild(thr);
                    table.appendChild(thead);
                    var dirsTR = [];
                    var filesTR = [];
                    for (var o in object) {
                        var tr = document.createElement("tr");
                        var tdName = document.createElement("td");
                        var tdSize = document.createElement("td");
                        var tdDate = document.createElement("td");
                        var tdType = document.createElement("td");
                        tr.appendChild(tdName);
                        tr.appendChild(tdSize);
                        tr.appendChild(tdDate);
                        tr.appendChild(tdType);
                        tr.className = "rowUnselected";
                        tr.addEventListener("click", function (e) {
                            if (e.currentTarget.parentElement.tagName != "THEAD") {
                                var allTRs = document.getElementsByTagName("tr");
                                for (var i = 0; i < allTRs.length; i++) {
                                    if (allTRs[i].className = "rowSelected") {
                                        allTRs[i].className = "rowUnselected";
                                    }
                                }
                                e.currentTarget.classList.toggle("rowSelected");
                        }});

                        if (object[o]["extension"] == undefined) {
                            if (o != "modificationDate" && o != "size") {
                                if (Object.keys(object[o]).length > 2) {
                                    tdName.innerHTML = "<span class='dir'></span>" + o;
                                } else {
                                    tdName.innerHTML = "<span class='emptyDir'></span>" + o;
                                }
                                tdType.innerHTML = "folder";
                                tdDate.innerHTML = new Date(parseInt(object[o]["modificationDate"]) * 1000).toLocaleDateString();
                                tdSize.innerHTML = (object[o]["size"] / 1000) + " Ko";
                                dirsTR.push(tr);
                                tr.addEventListener("dblclick", function (e) {
                                    currentExplorerPath.push(e.currentTarget.children[0].innerText);
                                    openDir();
                                });
                            }
                        } else {
                            tdName.innerHTML = "<span class='file'></span>" + o;
                            tdSize.innerHTML = object[o]["size"] / 1000 + " Ko";
                            tdDate.innerHTML = new Date(parseInt(object[o]["modificationDate"]) * 1000).toLocaleDateString();
                            tdType.innerHTML = object[o]["extension"] + " file";
                            var fileLink = document.createElement("A");
                            fileLink.style.display = "none";
                            fileLink.href = object[o]["url"];
                            fileLink.target = "_blank";
                            tdName.appendChild(fileLink);
                            filesTR.push(tr);
                            tr.addEventListener("dblclick", function (e) {
                                e.currentTarget.children[0].children[1].click();
                            });
                        }

                    }
                    if (sortCat == "size") {
                        dirsTR.sort(function (a, b) {
                            return parseInt(a.children[1].innerText) - parseInt(b.children[1].innerText)
                        });
                        filesTR.sort(function (a, b) {
                            return parseInt(a.children[1].innerText) - parseInt(b.children[1].innerText)
                        });
                    } else if (sortCat == "modificationDate") {
                        dirsTR.sort(function (a, b) {
                            var adatar = a.children[2].innerText.split("/");
                            var adate = new Date(adatar[2], adatar[1], adatar[0]).getTime();
                            var bdatar = b.children[2].innerText.split("/");
                            var bdate = new Date(bdatar[2], bdatar[1], bdatar[0]).getTime();
                            return adate - bdate;
                        });
                        filesTR.sort(function (a, b) {
                            var adatar = a.children[2].innerText.split("/");
                            var adate = new Date(adatar[2], adatar[1], adatar[0]).getTime();
                            var bdatar = b.children[2].innerText.split("/");
                            var bdate = new Date(bdatar[2], bdatar[1], bdatar[0]).getTime();
                            return adate - bdate;
                        });
                    } else if (sortCat == "type") {

                        filesTR.sort(function (a, b) {
                            return parseInt(a.children[3].innerText) < parseInt(b.children[3].innerText)
                        });
                    }
                    if (!sortAsc) {
                        if (sortCat != "type")
                            dirsTR.reverse();
                        filesTR.reverse();
                    }

                    for (let i = 0; i < dirsTR.length; i++)
                        table.appendChild(dirsTR[i]);
                    for (let i = 0; i < filesTR.length; i++)
                        table.appendChild(filesTR[i]);
                    return (table);
                }

                function toggleCollapse(e) {
                    e.stopImmediatePropagation();
                    if (e.target.tagName == "LI") {
                        var li = e.target;
                        if (li.children[1].tagName == "UL" && li.children[1].style.display == "block")
                            li.children[1].style.display = "none";
                        else if (li.children[1].tagName == "UL" && li.children[1].style.display == "none")
                            li.children[1].style.display = "block";
                    }
                }

                function openDir() {
                    var branch = fileTree;
                    dirExplorer.children[0].innerText = "";
                    for (var i = 0; i < currentExplorerPath.length; i++) {
                        branch = branch[currentExplorerPath[i]];
                        var pathBtn = document.createElement("button");
                        pathBtn.innerText = currentExplorerPath[i];
                        pathBtn.addEventListener("click", function (e) {
                            currentExplorerPath.splice(currentExplorerPath.indexOf(e.currentTarget.innerText) + 1, currentExplorerPath.length - currentExplorerPath.indexOf(e.currentTarget.innerText));
                            openDir();
                        });
                        dirExplorer.children[0].appendChild(pathBtn);
                    }

                    if (dirExplorer.children[1]) {
                        dirExplorer.removeChild(dirExplorer.children[1]);
                    }
                    dirExplorer.appendChild(getTableElementFromDir(branch));
                    var allTDs=Array.from(document.getElementsByTagName("TD")).concat(Array.from(document.getElementsByTagName("TH")));
                    for(var i=0;i<allTDs.length;i++){
                        allTDs[i].style.minWidth=allTDs[i].offsetWidth+"px";console.log(allTDs[i].style.minWidth);
                    }
                }

                function redispatchClickFromParent(e) {
                    e.target.parentElement.click();
                }

            </script>
        </div>
    </body>

</html>

<?php

function getDirContents($dir) {
    $jsonStr = "{";
    $jsonStr .= '"modificationDate":' . filemtime($dir) . ',"size":' . dirSize($dir) . ',';
    $files = scandir($dir);
    $bool = false;
    foreach ($files as $key => $value) {
        $path = $dir . "/" . $value;
        if (!is_dir($path)) {
            $bool = true;
            $jsonStr .= '"' . $value . '":{"extension":"' . pathinfo($path, PATHINFO_EXTENSION) . '","name":"' . $value . '","size":"' . filesize($path) . '","modificationDate":"' . filemtime($path) . '","url":"' . $path . '"},';
        } else if ($value != "." && $value != "..") {
            $bool = true;
            $jsonStr .= '"' . $value . '":' . getDirContents($path) . ',';
        }
    }

    $jsonStr = substr($jsonStr, 0, strlen($jsonStr) - 1);

    $jsonStr .= "}";
    return $jsonStr;
}

function dirSize($path) {
    $bytes = 0;
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
    foreach ($iterator as $i) {
        $bytes += $i->getSize();
    }
    return $bytes;
}
?>
