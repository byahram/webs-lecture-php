<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include "../include/head.php" ?>
</head>
<body>
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <section id="board" class="container section">
            <h2>개발자 게시판</h2>
            <p>웹디자이너, 웹퍼블리셔, 프론트앤드 개발자를 위한 게시판입니다.</p>
            <div class="board__inner">
                <div class="board__search">
                    <div class="left">
                        * 총 <em>1111</em>건의 게시물이 등록되어 있습니다.
                    </div>
                    <div class="right">
                        <form action="boardSearch.php" name="boardSearch" method="get">
                            <fieldset>
                                <legend class="blind">게시판 검색 영역</legend>
                                <input type="search" name="searchKeyword" id="searchKeyword" class="input_style2" placeholder="검색어를 입력하세요!"
                                    aria-label="search" required>
                                <select name="searchOption" id="searchOption" class="select_style1">
                                    <option value="title">제목</option>
                                    <option value="content">내용</option>
                                    <option value="name">등록자</option>
                                </select>
                                <button type="submit" class="btn btn_style3">검색</button>
                                <a href="boardWrite.html" class="btn btn_style4">글쓰기</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="board__table">
                    <table>
                        <colgroup>
                            <col style="width: 5%">
                            <col>
                            <col style="width: 10%">
                            <col style="width: 10%">
                            <col style="width: 7%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>등록자</th>
                                <th>등록일</th>
                                <th>조회수</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>59</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>39</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>99</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><a href="boardView.html">게시판 제목입니다.</a></td>
                                <td>황상연</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="board__pages">
                    <ul>
                        <li><a href="#">처음으로</a></li>
                        <li><a href="#">이전</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">다음</a></li>
                        <li><a href="#">마지막으로</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //board -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>
