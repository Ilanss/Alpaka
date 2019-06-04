export default {
    data() {
      return {
        selected: null,
        options: [
          { value: null, text: 'OrderBy' },
          { value: '1', text: 'Prix 0-9' },
          { value: '2', text: 'Prix 9-0' },
          { value: '3', text: 'Disponibility' },
          { value: '4', text: 'Year'}
        ]
      }
    }
  }