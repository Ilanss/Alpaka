export default {
    data() {
        return {
            selected: null,
            options: [
                {
                    value: null,
                    text: 'Trier par'
                },
                {
                    value: '1',
                    text: 'Prix croissant'
                },
                {
                    value: '2',
                    text: 'Prix décroissant'
                },
                {
                    value: '3',
                    text: 'Nom'
                },
                {
                    value: '4',
                    text: 'Année'
                }
        ]
        }
    }
}
