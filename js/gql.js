document.addEventListener('DOMContentLoaded', onGraphQL);

function onGraphQL() {
	let endpoint = 'http://efamol.local/graphql';

	const headers = {
		'content-type': 'application/json',
	};

	const graphqlQuery = {
		query: `query productQuery {  kjds(where: {id: 78}) {
      edges {
        node {
          id
          title
          content(format: RENDERED)
          comments {
            edges {
              node {
                content
              }
            }
          }
        }
      }
    }}`,
		variables: { pageId: 78 },
	};

	const response = axios({
		url: endpoint,
		method: 'post',
		headers: headers,
		data: graphqlQuery,
	}).then((response) => {
		let target = document.querySelector('.resty');
		target.innerHTML = response.data.data.kjds['edges'][0].node.content;
		window.gql_debug = response.data.data;
	});
}
