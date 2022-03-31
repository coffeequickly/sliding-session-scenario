<template>
    <article>
        <dl>
            <dt>로그인 / 로그아웃</dt>
            <dd>
                <input type="text" placeholder="ID">
                <input type="text" placeholder="PW">
                <button type="button">로그인</button>
                <button type="button">로그아웃</button>
            </dd>
        </dl>

        <dl>
            <dt>사용자 상태</dt>
            <dd>
                <p>아이디</p>
                <p>이름</p>
                <p>로그인 시간</p>
                <p>User Agent</p>
            </dd>
        </dl>

        <dl>
            <dt>토큰</dt>
            <dd>AccessToken</dd>
            <dd>RefreshToken</dd>
        </dl>
    </article>
</template>

<script>
export default {
  name: 'IndexPage'
}
</script>
