import axios from 'axios';

export default {
  User: {
    CreateUser: async (data) => {
      return await axios.post('/api/v1/user/create_user', data);
    },
    GetUsers: async (data) => {
      return await axios.post('/api/v1/user/get_users', data);
    },

  },
  AdminUser: {
    GetUsers: async (data) => {
      return await axios.post('/api/v1/admin_user/get_users', data);
    },

  },
  Article: {
    GetArticleComments: async (data) => {
      return await axios.post('/api/v1/article/get_article_comments', data);
    },
    CreateArticle: async (data) => {
      return await axios.post('/api/v1/article/create_article', data);
    },
    GetArticle: async (data) => {
      return await axios.post('/api/v1/article/get_article', data);
    },
    GetArticles: async (data) => {
      return await axios.post('/api/v1/article/get_articles', data);
    },

  },

}

